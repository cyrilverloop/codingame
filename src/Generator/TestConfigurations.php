<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use CyrilVerloop\Iterator\IntPosition;

/**
 * The test configurations.
 */
final class TestConfigurations extends IntPosition
{
    // Methods :

    /**
     * Adds a test configuration.
     * @param \CyrilVerloop\Codingame\Generator\TestConfiguration $item a test configuration.
     */
    public function add(TestConfiguration $item): void
    {
        $this->list[count($this->list)] = $item;
    }

    /**
     * @return \CyrilVerloop\Codingame\Generator\TestConfiguration a test configuration.
     */
    public function current(): TestConfiguration
    {
        return parent::current();
    }
}
