<?php

namespace Braingames\Games;

use function \cli\line;

function even()
{
    $mes = 'Answer "yes" if the number is even, otherwise answer "no"';
    $game = 'Braingames\Games\startEven';
    hello($mes, $game);
}

function startEven()
{
    $i = 0;
    $stats = getStats();
    \cli\line(' %w%8Question: %s%n', $stats['number']);
    $result = \cli\prompt(" ");
    \cli\line(" %w%8Your answer: %s%n", $result);
    if ($result != $stats['right']) {
        \cli\line(
            " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
            array('a' => $result, 'b' => $stats['right'])
        );
        return 0;
    } else {
        \cli\line(" %g%8Correct!%n");
    }
    return 1;
}

function getStats()
{
    $stats = [];
    $number = rand(1, 30);
    if ($number % 2 == 0) {
        $answer = 'yes';
        $wrong = 'no';
    } else {
        $answer = 'no';
        $wrong = 'yes';
    }
    $stats['number'] = $number;
    $stats['right'] = $answer;
    $stats['wrong'] = $wrong;
    return $stats;
}
