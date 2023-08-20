<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SudokuSolver;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SudokuSolver\SudokuSolver;

/**
 * Tests for the "Sudoku solver" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SudokuSolver\SudokuSolver
 * @group sudokuSolver
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SudokuSolver();
    }

    /**
     * Test that the code can be executed for "Very easy".
     *
     * @group sudokuSolver_veryEasy
     */
    public function testCanExecuteVeryEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - very easy.txt',
            file_get_contents(__DIR__ . '/output/01 - very easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group sudokuSolver_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy.txt',
            file_get_contents(__DIR__ . '/output/02 - easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Intermediate/Hard".
     *
     * @group sudokuSolver_intermediateHard
     */
    public function testCanExecuteIntermediateHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - intermediate hard.txt',
            file_get_contents(__DIR__ . '/output/03 - intermediate hard.txt')
        );
    }

    /**
     * Test that the code can be executed for "World's hardest sudoku".
     *
     * @group sudokuSolver_worldsHardestSudoku
     */
    public function testCanExecuteWorldsHardestSudoku(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - worlds hardest sudoku.txt',
            file_get_contents(__DIR__ . '/output/04 - worlds hardest sudoku.txt')
        );
    }
}
