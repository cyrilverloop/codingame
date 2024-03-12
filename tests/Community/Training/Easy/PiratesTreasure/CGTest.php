<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\PiratesTreasure;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\PiratesTreasure\PiratesTreasure;

/**
 * Tests for the "Pirate's treasure" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\PiratesTreasure\PiratesTreasure
 * @group piratesTreasure
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PiratesTreasure();
    }

    /**
     * Test that the code can be executed for "Smallest island".
     *
     * @group piratesTreasure_smallestIsland
     */
    public function testCanExecuteSmallestIsland(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - smallest island.txt',
            "0 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fully surrounded".
     *
     * @group piratesTreasure_fullySurrounded
     */
    public function testCanExecuteFullySurrounded(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - fully surrounded.txt',
            "1 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small island".
     *
     * @group piratesTreasure_smallIsland
     */
    public function testCanExecuteSmallIsland(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small island.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large island".
     *
     * @group piratesTreasure_largeIsland
     */
    public function testCanExecuteLargeIsland(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large island.txt',
            "23 23" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Edge".
     *
     * @group piratesTreasure_edge
     */
    public function testCanExecuteEdge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - edge.txt',
            "2 0" . PHP_EOL
        );
    }
}
