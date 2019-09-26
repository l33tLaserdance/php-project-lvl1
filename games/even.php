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
    $stats = getStatsForEven();
    return [
        'question' => $stats['number'],
        'right' => $stats['right']
    ];
}

function getStatsForEven()
{
    $stats = [];
    $number = rand(1, 30);
    if ($number % 2 == 0) {
        $answer = 'yes';
    } else {
        $answer = 'no';
    }
    $stats['number'] = $number;
    $stats['right'] = $answer;
    return $stats;
}
