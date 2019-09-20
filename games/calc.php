<?php

namespace Braingames\Games;

use function \cli\line;

function calc()
{
    \cli\line(' %w%8Welcome to the Brain Games!%n');
    \cli\line(' %w%8What is the result of the expression?%n');
    $name = \cli\prompt(' %w%8May I have your name?%n');
    \cli\line(' %g%8Hello, %s!%n', $name);
    $i = 0;
    for ($i = 0; $i < 3; $i++) {
        $game = randomCall();
        if ($game == 0) {
            return \cli\line(" %r%8Let's try again, %s!%n", $name);
        }
    }
    return \cli\line(" %g%8Congratulations, %s!%n", $name);
}

function summary()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] + $stats['second'];
    \cli\line(" %w%8Question: {:a} + {:b}%n", array('a' => $stats['first'], 'b' => $stats['second']));
    $answer = \cli\prompt(" ");
    $final  = [];
    $final['answer'] = $answer;
    $final['result'] = $result;
    return getResult($final);
}

function substract()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] - $stats['second'];
    \cli\line(" %w%8Question: {:a} - {:b}%n", array('a' => $stats['first'], 'b' => $stats['second']));
    $answer = \cli\prompt(" ");
    $final  = [];
    $final['answer'] = $answer;
    $final['result'] = $result;
    return getResult($final);
}

function multiply()
{
    $stats = getRandomNumbers();
    $result = $stats['first'] * $stats['second'];
    \cli\line(" %w%8Question: {:a} * {:b}%n", array('a' => $stats['first'], 'b' => $stats['second']));
    $answer = \cli\prompt(" ");
    $final  = [];
    $final['answer'] = $answer;
    $final['result'] = $result;
    return getResult($final);
}

function randomCall()
{
    $callfunc = rand(0, 2);
    switch ($callfunc) {
        case 0:
            return summary();
            break;
        case 1:
            return substract();
            break;
        case 2:
            return multiply();
            break;
        default:
            echo "An error has occured.";
            return 0;
            break;
    }
}

function getRandomNumbers()
{
    $stats = [];
    $stats['first'] = rand(1, 30);
    $stats['second'] = rand(1, 30);
    return $stats;
}

function getResult(array $final)
{
    if ($final['answer'] == $final['result']) {
        \cli\line(" %g%8Correct!%n");
        return 1;
    } else {
        \cli\line(
            " %w%8'%r%8{:c}%w%8' is wrong answer ;(. Correct answer was '%g%8{:d}%w%8'%n",
            array('c' => $final['answer'], 'd' => $final['result'])
        );
        return 0;
    }
}
