<?php

namespace Braingames\Games;

use function \cli\line;

function prime()
{
    $mes = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $game = 'Braingames\Games\startPrime';
    hello($mes, $game);
}
// 13
function startPrime()
{
    $num = rand(0, 3571);
    \cli\line(' %w%8Question: %s%n', $num);
    $answer = \cli\prompt(" ");
    \cli\line(" %w%8Your answer: %s%n", $answer);
    if (primeCheck($num) == $answer) {
        \cli\line(" %g%8Correct!%n");
        return 1;
    } else {
        \cli\line(
            " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
            array('a' => $answer, 'b' => primeCheck($num))
        );
        return 0;
    }
}
// 31
function primeCheck(int $number)
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
