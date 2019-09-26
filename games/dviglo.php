<?php

namespace Braingames\Games;

use function \cli\line;

function hello($message, $game)
{
    \cli\line(' %w%8Welcome to the Brain Games!%n');
    \cli\line(" %w%8%s%n", $message);
    $name = \cli\prompt(' %w%8May I have your name?%n');
    \cli\line(' %g%8Hello, %s!%n', $name);
    $i = 0;
    for ($i = 0; $i < 3; $i++) {
        $result = $game();
        \cli\line(' %w%8Question: %s%n', $result['question']);
        $answer = \cli\prompt(" ");
        \cli\line(" %w%8Your answer: %s%n", $answer);
        if ($result['right'] != $answer) {
            \cli\line(
                " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
                array('a' => $answer, 'b' => $result['right'])
            );
            return \cli\line(" %r%8Let's try again, %s!%n", $name);
        } else {
            \cli\line(" %g%8Correct!%n");
        }
    }
    return \cli\line(" %g%8Congratulations, %s!%n", $name);
}
