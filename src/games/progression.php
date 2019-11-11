<?php

namespace Braingames\Games;

define("PROGRESSION_MESSAGE", 'What number is missing in the progressions given below?');

function invertProgression(array $progression)
{
    $size = count($progression) - 1;
    for ($i = 0; $i < $size / 2; $i++) {
        $val = $progression[$i];
        $progression[$i] = $progression[$size - $i];
        $progression[$size - $i] = $val;
    }
    return $progression;
}

function runProgression()
{
    $getGameData = function () {
        $initial = rand(1, 10);
        $step = rand(2, 10);
        $length = 10;
        $inversion = rand(0, 1);
        $progression = generateProgression($initial, $step, $length, $inversion);
        $conceal = rand(0, 9);
        $answer = $progression[$conceal];
        $progression[$conceal] = '..';
        $question = implode(' ', $progression);
        return [
            'question' => $question,
            'answer' => $answer
        ];
    };
    startGame(PROGRESSION_MESSAGE, $getGameData);
}

function generateProgression($initial, $step, $length, $inversion)
{
    for ($i = 0; $i <= $length; $i++) {
        $progression[$i] = $initial + ($step * $i);
    }
    return ($inversion == 1) ? invertProgression($progression) : $progression;
}
