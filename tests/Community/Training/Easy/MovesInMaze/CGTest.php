<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MovesInMaze;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MovesInMaze\MovesInMaze;

/**
 * Tests for the "Moves in maze" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MovesInMaze\MovesInMaze
 * @group movesInMaze
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MovesInMaze();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group movesInMaze_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            file_get_contents(__DIR__ . '/output/01 - easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Loop".
     *
     * @group movesInMaze_loop
     */
    public function testCanExecuteLoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - loop.txt',
            file_get_contents(__DIR__ . '/output/02 - loop.txt')
        );
    }

    /**
     * Test that the code can be executed for "Through borders".
     *
     * @group movesInMaze_throughBorders
     */
    public function testCanExecuteThroughBorders(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - through borders.txt',
            file_get_contents(__DIR__ . '/output/03 - through borders.txt')
        );
    }

    /**
     * Test that the code can be executed for "Space".
     *
     * @group movesInMaze_space
     */
    public function testCanExecuteSpace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - space.txt',
            file_get_contents(__DIR__ . '/output/04 - space.txt')
        );
    }

    /**
     * Test that the code can be executed for "Unreachable".
     *
     * @group movesInMaze_unreachable
     */
    public function testCanExecuteUnreachable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - unreachable.txt',
            file_get_contents(__DIR__ . '/output/05 - unreachable.txt')
        );
    }

    /**
     * Test that the code can be executed for "Everything".
     *
     * @group movesInMaze_everything
     */
    public function testCanExecuteEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - everything.txt',
            file_get_contents(__DIR__ . '/output/06 - everything.txt')
        );
    }

    /**
     * Test that the code can be executed for "Blocked".
     *
     * @group movesInMaze_blocked
     */
    public function testCanExecuteBlocked(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - blocked.txt',
            file_get_contents(__DIR__ . '/output/07 - blocked.txt')
        );
    }
}
