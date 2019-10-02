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
    $dataForGenerator = getDataForProgression();
    $progression = generateProgression($dataForGenerator);
    $conceal = rand(1, 10);
    $concealedElement = $progression[$conceal];
    $progression[$conceal] = '..';
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'right' => $concealedElement
    ];
}

function getDataForProgression()
{
    $initial = rand(1, 10);
    $step = rand(2, 10);
    $length = 10;
    $invert = rand(0, 1); // случайный выбор, вывести в обратном порядке или нет
    return [
        'initial' => $initial,
        'step' => $step,
        'length' => $length,
        'invert' => $invert
    ];
}

function generateProgression(array $data)
{
    for ($i = 1; $i <= $data['length']; $i++) {
        $progression[$i] = $data['initial'] + ($data['step'] * $i);
    }
    if ($data['invert'] == 1) {
        return invert($progression);
    }
    return $progression;
}
