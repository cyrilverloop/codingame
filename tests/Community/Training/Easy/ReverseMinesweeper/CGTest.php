<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ReverseMinesweeper;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ReverseMinesweeper\ReverseMinesweeper;

/**
 * Tests for the "Reverse Minesweeper" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ReverseMinesweeper\ReverseMinesweeper
 * @group reverseMinesweeper
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ReverseMinesweeper();
    }

    /**
     * Test that the code can be executed for "One mine".
     *
     * @group reverseMinesweeper_oneMine
     */
    public function testCanExecuteOneMine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one mine.txt',
            file_get_contents(__DIR__ . '/output/01 - one mine.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many mines".
     *
     * @group reverseMinesweeper_manyMines
     */
    public function testCanExecuteManyMines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - many mines.txt',
            file_get_contents(__DIR__ . '/output/02 - many mines.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lot of mines".
     *
     * @group reverseMinesweeper_lotOfMines
     */
    public function testCanExecuteLotOfMines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - lot of mines.txt',
            file_get_contents(__DIR__ . '/output/03 - lot of mines.txt')
        );
    }

    /**
     * Test that the code can be executed for "No mine".
     *
     * @group reverseMinesweeper_noMine
     */
    public function testCanExecuteNoMine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no mine.txt',
            file_get_contents(__DIR__ . '/output/04 - no mine.txt')
        );
    }
}
