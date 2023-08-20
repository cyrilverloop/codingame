<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\KillerSudokuSolver;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\KillerSudokuSolver\KillerSudokuSolver;

/**
 * Tests for the "Killer sudoku solver" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\KillerSudokuSolver\KillerSudokuSolver
 * @group killerSudokuSolver
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new KillerSudokuSolver();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group killerSudokuSolver_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            file_get_contents(__DIR__ . '/output/01 - easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium".
     *
     * @group killerSudokuSolver_medium
     */
    public function testCanExecuteMedium(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - medium.txt',
            file_get_contents(__DIR__ . '/output/02 - medium.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hard".
     *
     * @group killerSudokuSolver_hard
     */
    public function testCanExecuteHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hard.txt',
            file_get_contents(__DIR__ . '/output/03 - hard.txt')
        );
    }

    /**
     * Test that the code can be executed for "Expert".
     *
     * @group killerSudokuSolver_expert
     */
    public function testCanExecuteExpert(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - expert.txt',
            file_get_contents(__DIR__ . '/output/04 - expert.txt')
        );
    }
}
