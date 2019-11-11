<?php

namespace Braingames\Games;

define("CALC_MESSAGE", 'What is the result of the expression?');

function runCalc()
{
    $getGameData = function () {
        $first = rand(2, 30);
        $second = rand(2, 30);
        $operationsList = array('+', '-', '*');
        $resultsList = array($first + $second, $first - $second, $first * $second);
        $index = rand(0, count($operationsList) - 1);
        return [
            'question' => "$first $operationsList[$index] $second",
            'answer' => $resultsList[$index]
        ];
    };
    startGame(CALC_MESSAGE, $getGameData);
}
