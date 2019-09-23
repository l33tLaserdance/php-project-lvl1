<?php

namespace Braingames\Games;

use function \cli\line;

function progression()
{
    $mes = 'What number is missing in the progressions given below?';
    $game = 'Braingames\Games\startProgression';
    hello($mes, $game);
}

function invert(array $progression)
{
    $i = 0;
    $size = count($progression) - 1;
    for ($i = 0; $i < $size / 2; $i++) {
        $val = $progression[$i];
        $progression[$i] = $progression[$size - $i];
        $progression[$size - $i] = $val;
    }
    return $progression;
}

function getStartAndAmount()
{
    $progression = [];
    $progression['start'] = rand(2, 10);
    $progression['amount'] = rand(2, 10);
    return $progression;
}

function startProgression()
{
    $progression = generateProgression();
    print_r($progression);
    $conceal = rand(0, 9);
    $concealedElement = $progression[$conceal];
    $progression[$conceal] = '..';
    $forecho = implode(' ', $progression);
    \cli\line(" %w%8Question: %s %n", $forecho);
    $result = \cli\prompt(" ");
    \cli\line(" %w%8Your answer: %s%n", $result);
    if ($result == $concealedElement) {
        \cli\line(" %g%8Correct!%n");
        return 1;
    } else {
        \cli\line(
            " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
            array('a' => $result, 'b' => $concealedElement)
        );
        return 0;
    }
}

function generateProgression()
{
    $stats = getStartAndAmount();
    $progression = [];
    $progression[0] = $stats['start'];
    $i = 0;
    $choice = rand(0, 1);
    $invert = rand(0, 1);
    switch ($choice) {
        case 0:
            echo '*';
            for ($i = 0; $i <= 9; $i++) {
                $progression[$i] = ($stats['start'] + $i - 1) * $stats['amount'];
            }
            if ($invert == 1) {
                return invert($progression);
            }
            return $progression;
        case 1:
            echo '+';
            for ($i = 1; $i <= 9; $i++) {
                $progression[$i] = ($progression[$i - 1]) + $stats['amount'];
            }
            if ($invert == 1) {
                return invert($progression);
            }
            return $progression;
        default:
            echo "An error has occured.";
            return 0;
    }
}
