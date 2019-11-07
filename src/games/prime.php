<?php

namespace Braingames\Games;

function getPrimeData()
{
    $question = rand(0, 3571);
    return [
        'question' => $question,
        'answer' => (isPrime($question)) ? 'yes' : 'no'
    ];
}

function isPrime(int $number)
{
    $leastPrime = 2;
    if ($number < $leastPrime) {
        return false;
    }
    for ($leastPrime; $leastPrime <= $number / 2; $leastPrime++) {
        if ($number % $leastPrime == 0) {
            return false;
        }
    }
    return true;
}
