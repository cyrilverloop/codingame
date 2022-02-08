<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Training\Easy\Unary;

use CyrilVerloop\Codingame\Puzzle;

/**
 * The "Unary" puzzle.
 */
class Unary extends Puzzle
{
    // Methods :

    public function execute($stdin): void
    {
        $MESSAGE = stream_get_line($stdin, 100 + 1, "\n");

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n

        echo("answer\n");
    }
}
