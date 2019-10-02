<?php

namespace Braingames\Games;

define("primemessage", 'Answer "yes" if given number is prime. Otherwise answer "no"');
define("primegame", 'Braingames\Games\getPrimeData');

function prime()
{
    hello(primemessage, primegame);
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
