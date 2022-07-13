<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Calculator;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\Calculator\Calculator;

/**
 * Tests for the "Calculator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Calculator\Calculator
 * @group calculator
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Calculator();
    }

    /**
     * Test that the code can be executed for "A simple operation".
     *
     * @group calculator_aSimpleOperation
     */
    public function testCanExecuteASimpleOperation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple operation.txt',
            file_get_contents(__DIR__ . '/output/01 - a simple operation.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiplication and division".
     *
     * @group calculator_multiplicationAndDivision
     */
    public function testCanExecuteMultiplicationAndDivision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - multiplication and division.txt',
            file_get_contents(__DIR__ . '/output/02 - multiplication and division.txt')
        );
    }

    /**
     * Test that the code can be executed for "Using AC".
     *
     * @group calculator_usingAC
     */
    public function testCanExecuteUsingAC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - using AC.txt',
            file_get_contents(__DIR__ . '/output/03 - using AC.txt')
        );
    }

    /**
     * Test that the code can be executed for "Change of opinion".
     *
     * @group calculator_changeOfOpinion
     */
    public function testCanExecuteChangeOfOpinion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - change of opinion.txt',
            file_get_contents(__DIR__ . '/output/04 - change of opinion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many operations".
     *
     * @group calculator_manyOperations
     */
    public function testCanExecuteManyOperations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - many operations.txt',
            file_get_contents(__DIR__ . '/output/05 - many operations.txt')
        );
    }

    /**
     * Test that the code can be executed for "Press equal many times".
     *
     * @group calculator_pressEqualManyTimes
     */
    public function testCanExecutePressEqualManyTimes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - press equal many times.txt',
            file_get_contents(__DIR__ . '/output/06 - press equal many times.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long test".
     *
     * @group calculator_longTest
     */
    public function testCanExecuteLongTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - long test.txt',
            file_get_contents(__DIR__ . '/output/07 - long test.txt')
        );
    }
}
