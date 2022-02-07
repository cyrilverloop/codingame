<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame;

abstract class Puzzle
{
    // Methods :

    abstract public function execute($stdin): void;
}
