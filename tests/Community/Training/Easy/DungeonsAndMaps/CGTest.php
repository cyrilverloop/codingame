<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DungeonsAndMaps;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\DungeonsAndMaps\DungeonsAndMaps;

/**
 * Tests for the "Dungeons and maps" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DungeonsAndMaps\DungeonsAndMaps
 * @group dungeonsAndMaps
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DungeonsAndMaps();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group dungeonsAndMaps_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Trap".
     *
     * @group dungeonsAndMaps_trap
     */
    public function testCanExecuteTrap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - trap.txt',
            "TRAP" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 maps".
     *
     * @group dungeonsAndMaps_2Maps
     */
    public function testCanExecute2Maps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 2 maps.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many maps".
     *
     * @group dungeonsAndMaps_manyMaps
     */
    public function testCanExecuteManyMaps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - many maps.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Di".
     *
     * @group dungeonsAndMaps_di
     */
    public function testCanExecuteDi(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - di.txt',
            "TRAP" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Epic quest".
     *
     * @group dungeonsAndMaps_epicQuest
     */
    public function testCanExecuteEpicQuest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - epic quest.txt',
            3 . PHP_EOL
        );
    }
}
