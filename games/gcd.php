<?php

namespace Braingames\Games;

function gcd()
{
    $message = 'Find the greatest common divisor of given numbers.';
    $game = 'Braingames\Games\startGcd';
    hello($mesage, $game);
}

function startGcd()
{
    $stats = getStatsForGcd();
    return [
        'question' => $stats['first'] . ' ' . $stats['second'],
        'right' => $stats['result']
    ];
}

function getStatsForGcd()
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
    $remain = $stats['high'] % $stats['low'];
    if ($remain == 0) {
        $stats['result'] = $stats['low'];
        return $stats;
    }
    $last = $stats['low'];
    do {
        $final = $last % $remain;
        $last = $remain;
        $remain = $final;
    } while ($final > 0);
    $stats['result'] = $last;
    return $stats;
}
