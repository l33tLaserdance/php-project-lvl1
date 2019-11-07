<?php

namespace Braingames\Games;

function getCalcData()
{
    $first = rand(2, 30);
    $second = rand(2, 30);
    $operationsList = array($first + $second, $first - $second, $first * $second);
    $operandsList = array('+', '-', '*');
    $operandIndex = rand(0, count($operationsList) - 1);
    $questionOperand = $operandsList[$operandIndex];
    return [
        'question' => $first . ' ' . $questionOperand . ' ' . $second,
        'answer' => $operationsList[$operandIndex]
    ];
}
