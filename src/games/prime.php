<?php

namespace Braingames\Games;

function prime()
{
    $message = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $game = 'Braingames\Games\startPrimeGame';
    hello($message, $game);
}

function startPrimeGame()
{
    $num = rand(0, 3571);
    return [
        'question' => $num,
        'right' => getRightAnswer($num)
    ];
}

function getRightAnswer(int $number)
{
    if ($number < 2) {
        return 'no';
    }
    $i = 2;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}
