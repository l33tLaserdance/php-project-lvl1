<?php

namespace Braingames\Games;

use function \cli\line;

function hello($message)
{
    \cli\line(' %w%8Welcome to the Brain Games!%n');
    \cli\line(" %w%8%s%n", $message);
    $name = \cli\prompt(' %w%8May I have your name?%n');
    \cli\line(' %g%8Hello, %s!%n', $name);
    return $name;
}
