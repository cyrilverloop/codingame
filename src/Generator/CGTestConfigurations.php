<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use CyrilVerloop\Iterator\IntPosition;

/**
 * The puzzle's tests configurations.
 */
final class CGTestConfigurations extends IntPosition
{
    // Methods :

    /**
     * Adds a puzzle test configuration.
     * @param CGTestConfiguration $item a puzzle test configuration.
     */
    public function add(CGTestConfiguration $item): void
    {
        $this->list[count($this->list)] = $item;
    }

    public function current(): CGTestConfiguration
    {
        return parent::current();
    }
}
