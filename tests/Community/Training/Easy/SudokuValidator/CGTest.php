<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SudokuValidator;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SudokuValidator\SudokuValidator;

/**
 * Tests for the "Sudoku validator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SudokuValidator\SudokuValidator
 * @group sudokuValidator
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SudokuValidator();
    }

    /**
     * Test that the code can be executed for "Basic grid".
     *
     * @group sudokuValidator_basicGrid
     */
    public function testCanExecuteBasicGrid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - basic grid.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another correct grid".
     *
     * @group sudokuValidator_anotherCorrectGrid
     */
    public function testCanExecuteAnotherCorrectGrid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - another correct grid.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Row error".
     *
     * @group sudokuValidator_rowError
     */
    public function testCanExecuteRowError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - row error.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Column error".
     *
     * @group sudokuValidator_columnError
     */
    public function testCanExecuteColumnError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - column error.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Subgrid error".
     *
     * @group sudokuValidator_subgridError
     */
    public function testCanExecuteSubgridError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - subgrid error.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rubbish error".
     *
     * @group sudokuValidator_rubbishError
     */
    public function testCanExecuteRubbishError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - rubbish error.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "When summing is not enough".
     *
     * @group sudokuValidator_whenSummingIsNotEnough
     */
    public function testCanExecuteWhenSummingIsNotEnough(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - when summing is not enough.txt',
            "false" . PHP_EOL
        );
    }
}
