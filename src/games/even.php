<?php

namespace Braingames\Games;

define("EVEN_MESSAGE", 'Answer "yes" if the number is even, otherwise answer "no"');

function runEven()
{
    $getGameData = function () {
        $question = rand(1, 30);
        return [
            'question' => $question,
            'answer' => ($question % 2 == 0) ? 'yes' : 'no'
        ];
    };
    startGame(EVEN_MESSAGE, $getGameData);
}
