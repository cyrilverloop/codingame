<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Training\Easy\Defibrillators;

use CyrilVerloop\Codingame\Puzzle;

class Defibrillators extends Puzzle
{
    // Methods :

    public function execute($stdin): void
    {
        fscanf($stdin, "%s", $LON);
        fscanf($stdin, "%s", $LAT);
        fscanf($stdin, "%d", $N);
        for ($i = 0; $i < $N; $i++)
        {
            $DEFIB = stream_get_line($stdin, 256 + 1, "\n");
        }

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n

        echo("answer\n");
    }
}
