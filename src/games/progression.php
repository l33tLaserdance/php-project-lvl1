<?php

namespace Braingames\Games;

define("progmessage", 'What number is missing in the progressions given below?');
define("proggame", 'Braingames\Games\getProgressionData');

function progression()
{
    hello(progmessage, proggame);
}

function invert(array $progression)
{
    $i = 1;
    $size = count($progression);
    for ($i = 1; $i < $size / 2 + 1; $i++) {
        $val = $progression[$i];
        $progression[$i] = $progression[$size - $i + 1];
        $progression[$size - $i + 1] = $val;
    }
    return $progression;
}

function getProgressionData()
{
    $initial = getInitial();
    $step = getStep();
    $length = setLength();
    $inversion = setInvertedOrNot();
    $progression = generateProgression($initial, $step, $length, $inversion);
    $conceal = rand(1, 10);
    $concealedElement = $progression[$conceal];
    $progression[$conceal] = '..';
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'right' => $concealedElement
    ];
}

function getInitial()
{
    return rand(1, 10);
}

function getStep()
{
    return rand(2, 10);
}

function setLength()
{
    return 10;
}

function setInvertedOrNot()
{
    return rand(0, 1);
}

function generateProgression($initial, $step, $length, $inversion)
{
    for ($i = 1; $i <= $length; $i++) {
        $progression[$i] = $initial + ($step * $i);
    }
    return ($inversion == 1) ? invert($progression) : $progression;
}
