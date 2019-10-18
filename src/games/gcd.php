<?php

namespace Braingames\Games;

define("GCDMESSAGE", 'Find the greatest common divisor of given numbers.');
define("GCDGAME", 'Braingames\Games\getGcdData');

function gcd()
{
    startGame(GCDMESSAGE, GCDGAME);
}

function getGcdData()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $right = findGcd($firstNumber, $secondNumber);
    return [
        'question' => $firstNumber . ' ' . $secondNumber,
        'right' => $right
    ];
}

function findGcd($firstNumber, $secondNumber) {
    if ($secondNumber > 0) {
        return findGcd($secondNumber, $firstNumber % $secondNumber);
    } else {
        return abs($firstNumber);
    }
}
