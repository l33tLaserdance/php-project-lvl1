<?php

namespace Braingames\Games;

function getGcdData()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $answer = findGcd($firstNumber, $secondNumber);
    return [
        'question' => $firstNumber . ' ' . $secondNumber,
        'answer' => $answer
    ];
}

function findGcd($firstNumber, $secondNumber)
{
    if ($secondNumber > 0) {
        return findGcd($secondNumber, $firstNumber % $secondNumber);
    } else {
        return abs($firstNumber);
    }
}
