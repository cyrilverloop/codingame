<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Training\Easy\Temperatures;

use CyrilVerloop\Codingame\Puzzle;

class Temperatures extends Puzzle
{
    // Methods :

    public function execute($stdin): void
    {
        // $n: the number of temperatures to analyse
        fscanf($stdin, "%d", $n);
        $inputs = explode(" ", fgets($stdin));
        for ($i = 0; $i < $n; $i++) {
            $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
        }

        // Write an answer using echo(). DON'T FORGET THE TRAILING \n

        echo("result\n");
    }
}
