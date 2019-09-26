<?php

namespace Braingames\Games;

use function \cli\line;

function calc()
{
    $mes = 'What is the result of the expression?';
    $game = 'Braingames\Games\randomCall';
    hello($mes, $game);
}

function summary()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] + $stats['second'];
    return [
        'question' => $stats['first'] . ' + ' . $stats['second'],
        'right' => $result
    ];
}

function substract()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] - $stats['second'];
    return [
        'question' => $stats['first'] . ' - ' . $stats['second'],
        'right' => $result
    ];
}

function multiply()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] * $stats['second'];
    return [
        'question' => $stats['first'] . ' * ' . $stats['second'],
        'right' => $result
    ];
}

function randomCall()
{
    $callfunc = rand(0, 2);
    switch ($callfunc) {
        case 0:
            return summary();
            break;
        case 1:
            return substract();
            break;
        case 2:
            return multiply();
            break;
        default:
            echo "An error has occured.";
            return 0;
            break;
    }
}

function getRandomNumbers()
{
    $stats = [];
    $stats['first'] = rand(1, 30);
    $stats['second'] = rand(1, 30);
    return $stats;
}
