<?php

namespace Braingames\Games;

define("PRIME_MESSAGE", 'Answer "yes" if given number is prime. Otherwise answer "no"');

function runPrime()
{
    $getGameData = function () {
        $question = rand(0, 3571);
        return [
            'question' => $question,
            'answer' => (isPrime($question)) ? 'yes' : 'no'
        ];
    };
    startGame(PRIME_MESSAGE, $getGameData);
}

function isPrime(int $number)
{
    $leastPrime = 2;
    if ($number < $leastPrime) {
        return false;
    }
    for ($i = $leastPrime; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
