<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HexagonalMaze;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\HexagonalMaze\HexagonalMaze;

/**
 * Tests for the "Hexagonal maze" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HexagonalMaze\HexagonalMaze
 * @group hexagonalMaze
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HexagonalMaze();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group hexagonalMaze_easy
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
     * @group hexagonalMaze_loop
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
     * @group hexagonalMaze_throughBorders
     */
    public function testCanExecuteThroughBorders(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - through borders.txt',
            file_get_contents(__DIR__ . '/output/03 - through borders.txt')
        );
    }

    /**
     * Test that the code can be executed for "Corner ...".
     *
     * @group hexagonalMaze_corner
     */
    public function testCanExecuteCorner(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - corner.txt',
            file_get_contents(__DIR__ . '/output/04 - corner.txt')
        );
    }

    /**
     * Test that the code can be executed for "... or not".
     *
     * @group hexagonalMaze_orNot
     */
    public function testCanExecuteOrNot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - or not.txt',
            file_get_contents(__DIR__ . '/output/05 - or not.txt')
        );
    }

    /**
     * Test that the code can be executed for "Everything".
     *
     * @group hexagonalMaze_everything
     */
    public function testCanExecuteEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - everything.txt',
            file_get_contents(__DIR__ . '/output/06 - everything.txt')
        );
    }

    /**
     * Test that the code can be executed for "Real hexagon".
     *
     * @group hexagonalMaze_realHexagon
     */
    public function testCanExecuteRealHexagon(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - real hexagon.txt',
            file_get_contents(__DIR__ . '/output/07 - real hexagon.txt')
        );
    }

    /**
     * Test that the code can be executed for "Nothing to change".
     *
     * @group hexagonalMaze_nothingToChange
     */
    public function testCanExecuteNothingToChange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - nothing to change.txt',
            file_get_contents(__DIR__ . '/output/08 - nothing to change.txt')
        );
    }
}
