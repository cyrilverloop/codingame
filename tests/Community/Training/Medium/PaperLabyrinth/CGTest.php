<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PaperLabyrinth;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\PaperLabyrinth\PaperLabyrinth;

/**
 * Tests for the "Paper labyrinth" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PaperLabyrinth\PaperLabyrinth
 * @group paperLabyrinth
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PaperLabyrinth();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group paperLabyrinth_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            "5 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No one-way door, no loops".
     *
     * @group paperLabyrinth_noOneWayDoorNoLoops
     */
    public function testCanExecuteNoOneWayDoorNoLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no one-way door, no loops.txt',
            "10 10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One way door".
     *
     * @group paperLabyrinth_oneWayDoor
     */
    public function testCanExecuteOneWayDoor(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one way door.txt',
            "12 8" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "House of cards".
     *
     * @group paperLabyrinth_houseOfCards
     */
    public function testCanExecuteHouseOfCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - house of cards.txt',
            "18 8" . PHP_EOL
        );
    }
}
