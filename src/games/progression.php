<?php

namespace Braingames\Games;

function progression()
{
    $message = 'What number is missing in the progressions given below?';
    $game = 'Braingames\Games\startProgressionGame';
    hello($message, $game);
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

function startProgressionGame()
{
    $statsForGenerator = getStatsForProgression();
    $progression = generateProgression($statsForGenerator);
    $conceal = rand(0, 9);
    $concealedElement = $progression[$conceal];
    $progression[$conceal] = '..';
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'right' => $concealedElement
    ];
}

function getStatsForProgression()
{
    $stats = getStartAndAmount();
    $progression = [];
    $progression[0] = $stats['start'];
    $i = 0;
    $choice = rand(0, 1); // случайный выбор прогрессии с умножением или со сложением
    $invert = rand(0, 1); // случайный выбор, вывести в обратном порядке или нет
    return [
        'stats' => $stats,
        'progression' => $progression,
        'choice' => $choice,
        'invert' => $invert
    ];
}

function generateProgression(array $stats)
{
    switch ($stats['choice']) {
        case 0:
            for ($i = 0; $i <= 9; $i++) {
                $stats['progression'][$i] = ($stats['stats']['start'] + $i - 1) * $stats['stats']['amount'];
            }
            if ($stats['invert'] == 1) {
                return invert($stats['progression']);
            }
            return $stats['progression'];
        case 1:
            for ($i = 1; $i <= 9; $i++) {
                $stats['progression'][$i] = ($stats['progression'][$i - 1]) + $stats['stats']['amount'];
            }
            if ($stats['invert'] == 1) {
                return invert($stats['progression']);
            }
            return $stats['progression'];
    }
}
