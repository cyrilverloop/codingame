<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OneDSpreadsheet;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OneDSpreadsheet\OneDSpreadsheet;

/**
 * Tests for the "1D spreadsheet" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OneDSpreadsheet\OneDSpreadsheet
 * @group 1DSpreadsheet
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OneDSpreadsheet();
    }

    /**
     * Test that the code can be executed for "Simple dependency".
     *
     * @group 1DSpreadsheet_simpleDependency
     */
    public function testCanExecuteSimpleDependency(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple dependency.txt',
            file_get_contents(__DIR__ . '/output/01 - simple dependency.txt')
        );
    }

    /**
     * Test that the code can be executed for "Double dependency".
     *
     * @group 1DSpreadsheet_doubleDependency
     */
    public function testCanExecuteDoubleDependency(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - double dependency.txt',
            file_get_contents(__DIR__ . '/output/02 - double dependency.txt')
        );
    }

    /**
     * Test that the code can be executed for "Subtraction".
     *
     * @group 1DSpreadsheet_subtraction
     */
    public function testCanExecuteSubtraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - subtraction.txt',
            file_get_contents(__DIR__ . '/output/03 - subtraction.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiplication".
     *
     * @group 1DSpreadsheet_multiplication
     */
    public function testCanExecuteMultiplication(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiplication.txt',
            file_get_contents(__DIR__ . '/output/04 - multiplication.txt')
        );
    }

    /**
     * Test that the code can be executed for "No dependencies".
     *
     * @group 1DSpreadsheet_noDependencies
     */
    public function testCanExecuteNoDependencies(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - no dependencies.txt',
            file_get_contents(__DIR__ . '/output/05 - no dependencies.txt')
        );
    }

    /**
     * Test that the code can be executed for "Coefficients".
     *
     * @group 1DSpreadsheet_coefficients
     */
    public function testCanExecuteCoefficients(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - coefficients.txt',
            file_get_contents(__DIR__ . '/output/06 - coefficients.txt')
        );
    }

    /**
     * Test that the code can be executed for "Fibonacci".
     *
     * @group 1DSpreadsheet_fibonacci
     */
    public function testCanExecuteFibonacci(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - fibonacci.txt',
            file_get_contents(__DIR__ . '/output/07 - fibonacci.txt')
        );
    }

    /**
     * Test that the code can be executed for "Backward dependency".
     *
     * @group 1DSpreadsheet_backwardDependency
     */
    public function testCanExecuteBackwardDependency(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - backward dependency.txt',
            file_get_contents(__DIR__ . '/output/08 - backward dependency.txt')
        );
    }

    /**
     * Test that the code can be executed for "Diamond dependency".
     *
     * @group 1DSpreadsheet_diamondDependency
     */
    public function testCanExecuteDiamondDependency(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - diamond dependency.txt',
            file_get_contents(__DIR__ . '/output/09 - diamond dependency.txt')
        );
    }

    /**
     * Test that the code can be executed for "Accounting is easy".
     *
     * @group 1DSpreadsheet_accountingIsEasy
     */
    public function testCanExecuteAccountingIsEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - accounting is easy.txt',
            file_get_contents(__DIR__ . '/output/10 - accounting is easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Accounting is hard 1".
     *
     * @group 1DSpreadsheet_accountingIsHard1
     */
    public function testCanExecuteAccountingIsHard1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - accounting is hard 1.txt',
            file_get_contents(__DIR__ . '/output/11 - accounting is hard 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Accounting is hard 2".
     *
     * @group 1DSpreadsheet_accountingIsHard2
     */
    public function testCanExecuteAccountingIsHard2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - accounting is hard 2.txt',
            file_get_contents(__DIR__ . '/output/12 - accounting is hard 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Deep birecursion".
     *
     * @group 1DSpreadsheet_deepBirecursion
     */
    public function testCanExecuteDeepBirecursion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - deep birecursion.txt',
            file_get_contents(__DIR__ . '/output/13 - deep birecursion.txt')
        );
    }
}
