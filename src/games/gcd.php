<?php

namespace Braingames\Games;

define("GCD_MESSAGE", 'Find the greatest common divisor of given numbers.');

function runGcd()
{
    $getGameData = function () {
        $first = rand(1, 100);
        $second = rand(1, 100);
        $answer = findGcd($first, $second);
        return [
            'question' => $first . ' ' . $second,
            'answer' => $answer
        ];
    };
    startGame(GCD_MESSAGE, $getGameData);
}

function findGcd($first, $second)
{
    if ($second > 0) {
        return findGcd($second, $first % $second);
    } else {
        return abs($first);
    }
}
