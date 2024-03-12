<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\MayanCalculation;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Training\Medium\MayanCalculation\MayanCalculation;

/**
 * Tests for the "MayanCalculation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\MayanCalculation\MayanCalculation
 * @group mayanCalculation
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MayanCalculation();
    }

    /**
     * Test that the code can be executed for "Simple addition".
     *
     * @group mayanCalculation_simpleAddition
     */
    public function testCanExecuteSimpleAddition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple addition.txt',
            file_get_contents(__DIR__ . '/output/01 - simple addition.txt')
        );
    }

    /**
     * Test that the code can be executed for "Addition with carry".
     *
     * @group mayanCalculation_additionWithCarry
     */
    public function testCanExecuteAdditionWithCarry(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - addition with carry.txt',
            file_get_contents(__DIR__ . '/output/02 - addition with carry.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiplication".
     *
     * @group mayanCalculation_multiplication
     */
    public function testCanExecuteMultiplication(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiplication.txt',
            file_get_contents(__DIR__ . '/output/03 - multiplication.txt')
        );
    }

    /**
     * Test that the code can be executed for "Simple subtraction".
     *
     * @group mayanCalculation_simpleSubtraction
     */
    public function testCanExecuteSimpleSubtraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - simple subtraction.txt',
            file_get_contents(__DIR__ . '/output/04 - simple subtraction.txt')
        );
    }

    /**
     * Test that the code can be executed for "Subtraction".
     *
     * @group mayanCalculation_subtraction
     */
    public function testCanExecuteSubtraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - subtraction.txt',
            file_get_contents(__DIR__ . '/output/05 - subtraction.txt')
        );
    }

    /**
     * Test that the code can be executed for "Simple division".
     *
     * @group mayanCalculation_simpleDivision
     */
    public function testCanExecuteSimpleDivision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - simple division.txt',
            file_get_contents(__DIR__ . '/output/06 - simple division.txt')
        );
    }

    /**
     * Test that the code can be executed for "Division".
     *
     * @group mayanCalculation_division
     */
    public function testCanExecuteDivision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - division.txt',
            file_get_contents(__DIR__ . '/output/07 - division.txt')
        );
    }

    /**
     * Test that the code can be executed for "Great multiplication".
     *
     * @group mayanCalculation_greatMultiplication
     */
    public function testCanExecuteGreatMultiplication(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - great multiplication.txt',
            file_get_contents(__DIR__ . '/output/08 - great multiplication.txt')
        );
    }

    /**
     * Test that the code can be executed for "Zero".
     *
     * @group mayanCalculation_zero
     */
    public function testCanExecuteZero(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - zero.txt',
            file_get_contents(__DIR__ . '/output/09 - zero.txt')
        );
    }

    /**
     * Test that the code can be executed for "Missing power".
     *
     * @group mayanCalculation_missingPower
     */
    public function testCanExecuteMissingPower(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - missing power.txt',
            file_get_contents(__DIR__ . '/output/10 - missing power.txt')
        );
    }

    /**
     * Test that the code can be executed for "Base 20".
     *
     * @group mayanCalculation_base20
     */
    public function testCanExecuteBase20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - base 20.txt',
            file_get_contents(__DIR__ . '/output/11 - base 20.txt')
        );
    }

    /**
     * Test that the code can be executed for "Other symbols".
     *
     * @group mayanCalculation_otherSymbols
     */
    public function testCanExecuteOtherSymbols(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - other symbols.txt',
            file_get_contents(__DIR__ . '/output/12 - other symbols.txt')
        );
    }
}
