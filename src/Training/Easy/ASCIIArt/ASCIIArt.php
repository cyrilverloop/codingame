<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Training\Easy\ASCIIArt;

use CyrilVerloop\Codingame\Puzzle;

/**
 * The "ASCII Art" puzzle.
 */
class ASCIIArt implements Puzzle
{
    // Methods :

    public function execute($stdin): void
    {
        fscanf($stdin, "%d", $L);
        fscanf($stdin, "%d", $H);
        $T = stream_get_line($stdin, 256 + 1, "\n");
        for ($i = 0; $i < $H; $i++) {
            $ROW = stream_get_line($stdin, 1024 + 1, "\n");
        }

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n

        echo("answer\n");
    }
}
