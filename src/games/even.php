<?php

namespace Braingames\Games;

define("EVENMESSAGE", 'Answer "yes" if the number is even, otherwise answer "no"');
define("EVENGAME", 'Braingames\Games\getEvenData');

function even()
{
    hello(EVENMESSAGE, EVENGAME);
}

function getEvenData()
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
