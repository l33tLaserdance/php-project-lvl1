<?php

namespace Braingames\Games;

use function \cli\line;

function even()
{
    \cli\line(' %w%8Welcome to Brain Games!%n');
    \cli\line(' %w%8Answer "%g%8yes%w%8" if the number is even, otherwise answer "%r%8no%w%8"%n');
    $name = \cli\prompt(' %w%8May I have your name?%n');
    \cli\line(' %g%8Hello, %s!%n', $name);
    gameStart($name);
}

function gameStart($name)
{
    $i = 0;
    for ($i = 0; $i < 3; $i++) {
        $stats = getStats();
        \cli\line(' %w%8Question: %s%n', $stats['number']);
        $result = \cli\prompt(" ");
        \cli\line(" %w%8Your answer: %s%n", $result);
        if ($result != $stats['right']) {
            \cli\line(
                " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
                array('a' => $result, 'b' => $stats['right'])
            );
            return \cli\line(" %r%8Let's try again, %s!%n", $name);
        } else {
            \cli\line(" %g%8Correct!%n");
        }
    }
    return \cli\line(" %g%8Congratulations, %s!%n", $name);
}

function getStats()
{
    $stats = [];
    $number = rand(1, 30);
    if ($number % 2 == 0) {
        $answer = 'yes';
        $wrong = 'no';
    } else {
        $answer = 'no';
        $wrong = 'yes';
    }
    $stats['number'] = $number;
    $stats['right'] = $answer;
    $stats['wrong'] = $wrong;
    return $stats;
}
