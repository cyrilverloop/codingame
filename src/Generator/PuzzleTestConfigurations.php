<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use CyrilVerloop\Iterator\IntPosition;

/**
 * The puzzle's tests configurations.
 */
final class PuzzleTestConfigurations extends IntPosition
{
    // Methods :

    /**
     * Adds a puzzle test configuration.
     * @param PuzzleTestConfiguration $item a puzzle test configuration.
     */
    public function add(PuzzleTestConfiguration $item): void
    {
        $this->list[count($this->list)] = $item;
    }

    public function current(): PuzzleTestConfiguration
    {
        return parent::current();
    }
}
