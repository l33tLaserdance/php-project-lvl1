<?php

namespace Braingames\Games;

define("EVENMESSAGE", 'Answer "yes" if the number is even, otherwise answer "no"');

function even()
{
    $gamedata = function () {
        $number = rand(1, 30);
        return [
            'question' => $number,
            'right' => (isEven($number)) ? 'yes' : 'no'
        ];
    };
    startGame(EVENMESSAGE, $gamedata);
}

function isEven(int $number)
{
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}
