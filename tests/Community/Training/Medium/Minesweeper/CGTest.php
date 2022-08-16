<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Minesweeper;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\Minesweeper\Minesweeper;

/**
 * Tests for the "Minesweeper" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Minesweeper\Minesweeper
 * @group minesweeper
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Minesweeper();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group minesweeper_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hidden mines".
     *
     * @group minesweeper_hiddenMines
     */
    public function testCanExecuteHiddenMines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - hidden mines.txt',
            file_get_contents(__DIR__ . '/output/02 - hidden mines.txt')
        );
    }

    /**
     * Test that the code can be executed for "One line".
     *
     * @group minesweeper_oneLine
     */
    public function testCanExecuteOneLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one line.txt',
            file_get_contents(__DIR__ . '/output/03 - one line.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two blocks".
     *
     * @group minesweeper_twoBlocks
     */
    public function testCanExecuteTwoBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two blocks.txt',
            file_get_contents(__DIR__ . '/output/04 - two blocks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Final test".
     *
     * @group minesweeper_finalTest
     */
    public function testCanExecuteFinalTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - final test.txt',
            file_get_contents(__DIR__ . '/output/05 - final test.txt')
        );
    }
}
