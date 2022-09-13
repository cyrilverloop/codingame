<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Maze;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\Maze\Maze;

/**
 * Tests for the "Maze" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Maze\Maze
 * @group maze
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Maze();
    }

    /**
     * Test that the code can be executed for "Single exit".
     *
     * @group maze_singleExit
     */
    public function testCanExecuteSingleExit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - single exit.txt',
            file_get_contents(__DIR__ . '/output/01 - single exit.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple exits".
     *
     * @group maze_multipleExits
     */
    public function testCanExecuteMultipleExits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - multiple exits.txt',
            file_get_contents(__DIR__ . '/output/02 - multiple exits.txt')
        );
    }

    /**
     * Test that the code can be executed for "No way out".
     *
     * @group maze_noWayOut
     */
    public function testCanExecuteNoWayOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no way out.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Loops".
     *
     * @group maze_loops
     */
    public function testCanExecuteLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - loops.txt',
            file_get_contents(__DIR__ . '/output/04 - loops.txt')
        );
    }

    /**
     * Test that the code can be executed for "All together, 21x21".
     *
     * @group maze_allTogether21x21
     */
    public function testCanExecuteAllTogether21x21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - all together, 21x21.txt',
            file_get_contents(__DIR__ . '/output/05 - all together, 21x21.txt')
        );
    }
}
