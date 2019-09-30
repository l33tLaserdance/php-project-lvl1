<?php

namespace Braingames\Games;

use function cli\line as writeLine;
use function cli\prompt as requestInput;

function hello($message, $game)
{
    writeLine(' %w%8Welcome to the Brain Games!%n');
    writeLine(" %w%8%s%n", $message);
    $name = requestInput(' %w%8May I have your name?%n');
    writeLine(' %g%8Hello, %s!%n', $name);
    $i = 0;
    $turns = 3;
    for ($i = 0; $i < $turns; $i++) {
        $result = $game();
        writeLine(' %w%8Question: %s%n', $result['question']);
        $answer = requestInput(" ");
        writeLine(" %w%8Your answer: %s%n", $answer);
        if ($result['right'] != $answer) {
            writeLine(
                " %w%8'%r%8{:a}%w%8' is wrong answer ;(. Correct answer was '%g%8{:b}%w%8'%n",
                array('a' => $answer, 'b' => $result['right'])
            );
            return writeLine(" %r%8Let's try again, %s!%n", $name);
        } else {
            writeLine(" %g%8Correct!%n");
        }
    }
    return writeLine(" %g%8Congratulations, %s!%n", $name);
}
