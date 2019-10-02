<?php

namespace Braingames\Games;

define("CALCMESSAGE", 'What is the result of the expression?');
define("CALCGAME", 'Braingames\Games\randomAction');

function calc()
{
    hello(CALCMESSAGE, CALCGAME);
}

function randomAction()
{
    $data = getRandomNumbers();
    switch (rand(0, 2)) {
        case 0:
            return [
                'question' => $data['first'] . ' * ' . $data['second'],
                'right' => $data['first'] * $data['second']
            ];
        case 1:
            return [
                'question' => $data['first'] . ' - ' . $data['second'],
                'right' => $data['first'] - $data['second']
            ];
        case 2:
            return [
                'question' => $data['first'] . ' + ' . $data['second'],
                'right' => $data['first'] + $data['second']
            ];
        default:
            echo "An error has occured.";
            return 0;
            break;
    }
}

function getRandomNumbers()
{
    $data = [];
    $data['first'] = rand(1, 30);
    $data['second'] = rand(1, 30);
    return $data;
}
