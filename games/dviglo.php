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
        if ($result == 0) {
            return \cli\line(" %r%8Let's try again, %s!%n", $name);
        }
    }
    return \cli\line(" %g%8Congratulations, %s!%n", $name);
    //return $name;
}
