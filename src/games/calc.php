<?php

namespace Braingames\Games;

define("CALCMESSAGE", 'What is the result of the expression?');
define("CALCGAME", 'Braingames\Games\getCalcData');

function calc()
{
    startGame(CALCMESSAGE, CALCGAME);
}

function getCalcData()
{
    $firstNumber = rand(2, 30);
    $secondNumber = rand(2, 30);
    $allOperations = array($firstNumber + $secondNumber, $firstNumber - $secondNumber, $firstNumber * $secondNumber);
    $operationsList = array('+', '-', '*');
    $operationSelect = rand(0, 2);
    $operation = $operationsList[$operationSelect];
    return [
        'question' => $firstNumber . ' ' . $operation . ' ' . $secondNumber,
        'right' => $allOperations[$operationSelect]
    ];
}
