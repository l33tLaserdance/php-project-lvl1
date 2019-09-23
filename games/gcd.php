<?php

namespace Braingames\Games;

use function \cli\line;

function gcd()
{
    $mes = 'Find the greatest common divisor of given numbers.';
    $game = 'Braingames\Games\startGcd';
    hello($mes, $game);
}

function startGcd()
{
    $stats = getRandomStats();
    \cli\line(" %w%8Question: {:a} {:b}%n", array('a' => $stats['first'], 'b' => $stats['second']));
    $answer = \cli\prompt(" ");
    if ($answer == $stats['result']) {
        \cli\line(" %g%8Correct!%n");
        return 1;
    } else {
        \cli\line(
            " %w%8'%r%8{:c}%w%8' is wrong answer ;(. Correct answer was '%g%8{:d}%w%8'%n",
            array('c' => $answer, 'd' => $stats['result'])
        );
        return 0;
    }
}

function getRandomStats()
{
    $stats = [];
    $stats['first'] = rand(1, 100);
    $stats['second'] = rand(1, 100);
    if ($stats['first'] > $stats['second']) {
        $stats['high'] = $stats['first'];
        $stats['low'] = $stats['second'];
    } else {
        $stats['high'] = $stats['second'];
        $stats['low'] = $stats['first'];
    }
    $remain = $stats['high'] % $stats['low']; // 44
    if ($remain == 0) {
        $stats['result'] = $stats['low'];
        return $stats;
    }
    $last = $stats['low']; //96
    do {
        $final = $last % $remain; // 96 % 44, 8
        $last = $remain;
        $remain = $final;
    } while ($final > 0);
    $stats['result'] = $last;
    return $stats;
}
