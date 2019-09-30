<?php

namespace Braingames\Games;

function even()
{
    $message = 'Answer "yes" if the number is even, otherwise answer "no"';
    $game = 'Braingames\Games\startEvenGame';
    hello($message, $game);
}

function startEvenGame()
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
    $answer = checkIfEven($number);
    $stats['number'] = $number;
    $stats['right'] = $answer;
    return $stats;
}

function checkIfEven(int $number)
{
    if ($number % 2 == 0) {
        $answer = 'yes';
    } else {
        $answer = 'no';
    }
    return $answer;
}
