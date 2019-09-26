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
    $conceal = rand(0, 9);
    $concealedElement = $progression[$conceal];
    $progression[$conceal] = '..';
    $forecho = implode(' ', $progression);
    return [
        'question' => $forecho,
        'right' => $concealedElement
    ];
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
            for ($i = 0; $i <= 9; $i++) {
                $progression[$i] = ($stats['start'] + $i - 1) * $stats['amount'];
            }
            if ($invert == 1) {
                return invert($progression);
            }
            return $progression;
        case 1:
            for ($i = 1; $i <= 9; $i++) {
                $progression[$i] = ($progression[$i - 1]) + $stats['amount'];
            }
            if ($invert == 1) {
                return invert($progression);
            }
            return $progression;
    }
}
