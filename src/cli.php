<?php

namespace Braingames\Cli;

use function \cli\line;

function run()
{
    \cli\line(' %w%8Welcome to the Brain Game!%n');
    $name = \cli\prompt(' %w%8May I have your name?%n');
    if ($name == 'no' || $name == 'No' || $name == 'NO') {
        \cli\line(' %r%8Then GTFO!!!%n');
    } else {
        \cli\line(" %w%2Hello, %s!%n", $name);
    }
}
