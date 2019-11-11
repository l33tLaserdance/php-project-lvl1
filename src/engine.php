<?php

namespace Braingames\Games;

define("TURNS_COUNT", 3);

use function cli\line as line;
use function cli\prompt as prompt;

function startGame($message, $runGame)
{
    line("%w%8Welcome to the Brain Games!%n");
    line("%w%8%s%n", $message);
    $name = prompt("%w%8May I have your name?%n");
    line("%g%8Hello, %s!%n", $name);
    $result = true;
    for ($i = 0; $i < TURNS_COUNT; $i++) {
        $quiz = $runGame();
        line("%w%8Question: %s%n", $quiz['question']);
        $answer = prompt(" ");
        line("%w%8Your answer: %s%n", $answer);
        if ($quiz['answer'] != $answer) {
            line(
                "%w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
                array('a' => $answer, 'b' => $quiz['answer'])
            );
            line("%r%8Let's try again, %s!%n", $name);
            return 0;
        }
        line("%g%8Correct!%n");
    }
    line("%g%8Congratulations, %s!%n", $name);
}
