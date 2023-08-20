<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MinesweeperLevelGenerator;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MinesweeperLevelGenerator\MinesweeperLevelGenerator;

/**
 * Tests for the "Minesweeper level generator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MinesweeperLevelGenerator\MinesweeperLevelGenerator
 * @group minesweeperLevelGenerator
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MinesweeperLevelGenerator();
    }

    /**
     * Test that the code can be executed for "Simple level".
     *
     * @group minesweeperLevelGenerator_simpleLevel
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple level.txt',
            file_get_contents(__DIR__ . '/output/01 - simple level.txt')
        );
    }

    /**
     * Test that the code can be executed for "Corner selection".
     *
     * @group minesweeperLevelGenerator_cornerSelection
     */
    public function testCanExecuteCornerSelection(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - corner selection.txt',
            file_get_contents(__DIR__ . '/output/02 - corner selection.txt')
        );
    }

    /**
     * Test that the code can be executed for "Edge selection".
     *
     * @group minesweeperLevelGenerator_edgeSelection
     */
    public function testCanExecuteEdgeSelection(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - edge selection.txt',
            file_get_contents(__DIR__ . '/output/03 - edge selection.txt')
        );
    }

    /**
     * Test that the code can be executed for "Beginner level".
     *
     * @group minesweeperLevelGenerator_beginnerLevel
     */
    public function testCanExecuteBeginnerLevel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - beginner level.txt',
            file_get_contents(__DIR__ . '/output/04 - beginner level.txt')
        );
    }

    /**
     * Test that the code can be executed for "Intermediate level".
     *
     * @group minesweeperLevelGenerator_intermediateLevel
     */
    public function testCanExecuteIntermediateLevel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - intermediate level.txt',
            file_get_contents(__DIR__ . '/output/05 - intermediate level.txt')
        );
    }

    /**
     * Test that the code can be executed for "Expert level".
     *
     * @group minesweeperLevelGenerator_expertLevel
     */
    public function testCanExecuteExpertLevel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - expert level.txt',
            file_get_contents(__DIR__ . '/output/06 - expert level.txt')
        );
    }
}
