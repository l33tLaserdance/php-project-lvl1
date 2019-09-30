<?php

namespace Braingames\Games;

function prime()
{
    $message = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $game = 'Braingames\Games\startPrime';
    hello($message, $game);
}

function startPrime()
{
    $num = rand(0, 3571);
    return [
        'question' => $num,
        'right' => checkPrime($num)
    ];
}

function checkPrime(int $number)
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
