<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame;

/**
 * A base class for puzzle.
 */
abstract class Puzzle
{
    // Methods :

    /**
     * Execute the code of the puzzle.
     * @param resource $stdin the resource to get the datas from.
     */
    abstract public function execute($stdin): void;
}
