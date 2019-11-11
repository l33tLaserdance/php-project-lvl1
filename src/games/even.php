<?php

namespace Braingames\Games;

define("EVEN_MESSAGE", 'Answer "yes" if the number is even, otherwise answer "no"');

function runEven()
{
    $getGameData = function () {
        $question = rand(1, 30);
        return [
            'question' => $question,
            'answer' => isEven($question) ? 'yes' : 'no'
        ];
    };
    startGame(EVEN_MESSAGE, $getGameData);
}

function isEven($number)
{
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}
