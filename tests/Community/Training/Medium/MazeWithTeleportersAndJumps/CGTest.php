<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MazeWithTeleportersAndJumps;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\MazeWithTeleportersAndJumps\MazeWithTeleportersAndJumps;

/**
 * Tests for the "Maze /w teleporters and jumps" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MazeWithTeleportersAndJumps\MazeWithTeleportersAndJumps
 * @group mazeWithTeleportersAndJumps
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MazeWithTeleportersAndJumps();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group mazeWithTeleportersAndJumps_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jumps".
     *
     * @group mazeWithTeleportersAndJumps_jumps
     */
    public function testCanExecuteJumps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - jumps.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No way out".
     *
     * @group mazeWithTeleportersAndJumps_noWayOut
     */
    public function testCanExecuteNoWayOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no way out.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Teleporter maze".
     *
     * @group mazeWithTeleportersAndJumps_teleporterMaze
     */
    public function testCanExecuteTeleporterMaze(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - teleporter maze.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jumps and teleports".
     *
     * @group mazeWithTeleportersAndJumps_jumpsAndTeleports
     */
    public function testCanExecuteJumpsAndTeleports(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - jumps and teleports.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Don't take it".
     *
     * @group mazeWithTeleportersAndJumps_dontTakeIt
     */
    public function testCanExecuteDontTakeIt(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - don\'t take it.txt',
            3 . PHP_EOL
        );
    }
}
