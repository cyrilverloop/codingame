<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame;

/**
 * A base interface for puzzle.
 */
interface Puzzle
{
    /**
     * Execute the code of the puzzle.
     * @param resource $stdin the resource to get the datas from.
     */
    public function execute($stdin): void;
}
