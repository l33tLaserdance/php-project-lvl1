<?php

namespace Braingames\Games;

define("PRIMEMESSAGE", 'Answer "yes" if given number is prime. Otherwise answer "no"');
define("PRIMEGAME", 'Braingames\Games\getPrimeData');

function prime()
{
    hello(PRIMEMESSAGE, PRIMEGAME);
}

function getPrimeData()
{
    $question = rand(0, 3571);
    return [
        'question' => $question,
        'right' => (isPrime($question)) ? 'yes' : 'no'
    ];
}

function isPrime(int $number)
{
    if ($number < 2) {
        return 0;
    }
    $i = 2;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}
