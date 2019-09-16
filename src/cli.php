<?php

namespace Braingames\Cli;

use function \cli\line;

function run()
{
    line('Welcome to the Brain Game!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    \cli\Colors::enable(); // Forcefully enable
    \cli\line('  %C%3All output is run through %Y%2\cli\Colors::colorize%C%3 before display%n');
}
