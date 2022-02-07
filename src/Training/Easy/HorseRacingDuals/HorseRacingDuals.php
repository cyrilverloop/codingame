<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Training\Easy\HorseRacingDuals;

use CyrilVerloop\Codingame\Puzzle;

class HorseRacingDuals extends Puzzle
{
    // Methods :

    public function execute($stdin): void
    {
        fscanf($stdin, "%d", $N);
        for ($i = 0; $i < $N; $i++) {
            fscanf($stdin, "%d", $pi);
        }

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n

        echo("answer\n");
    }
}
