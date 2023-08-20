<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SimpleFractionToMixedNumber;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SimpleFractionToMixedNumber\SimpleFractionToMixedNumber;

/**
 * Tests for the "Simple fraction to mixed number" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SimpleFractionToMixedNumber\SimpleFractionToMixedNumber
 * @group simpleFractionToMixedNumber
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SimpleFractionToMixedNumber();
    }

    /**
     * Test that the code can be executed for "Both integer and fractional parts".
     *
     * @group simpleFractionToMixedNumber_bothIntegerAndFractionalParts
     */
    public function testCanExecuteBothIntegerAndFractionalParts(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - both integer and fractional parts.txt',
            file_get_contents(__DIR__ . '/output/01 - both integer and fractional parts.txt')
        );
    }

    /**
     * Test that the code can be executed for "Integer part only".
     *
     * @group simpleFractionToMixedNumber_integerPartOnly
     */
    public function testCanExecuteIntegerPartOnly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - integer part only.txt',
            file_get_contents(__DIR__ . '/output/02 - integer part only.txt')
        );
    }

    /**
     * Test that the code can be executed for "Fractional part only".
     *
     * @group simpleFractionToMixedNumber_fractionalPartOnly
     */
    public function testCanExecuteFractionalPartOnly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - fractional part only.txt',
            file_get_contents(__DIR__ . '/output/03 - fractional part only.txt')
        );
    }

    /**
     * Test that the code can be executed for "Zero".
     *
     * @group simpleFractionToMixedNumber_zero
     */
    public function testCanExecuteZero(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - zero.txt',
            file_get_contents(__DIR__ . '/output/04 - zero.txt')
        );
    }

    /**
     * Test that the code can be executed for "Division by zero".
     *
     * @group simpleFractionToMixedNumber_divisionByZero
     */
    public function testCanExecuteDivisionByZero(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - division by zero.txt',
            "DIVISION BY ZERO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sign handling".
     *
     * @group simpleFractionToMixedNumber_signHandling
     */
    public function testCanExecuteSignHandling(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - sign handling.txt',
            file_get_contents(__DIR__ . '/output/06 - sign handling.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some more sign handling".
     *
     * @group simpleFractionToMixedNumber_someMoreSignHandling
     */
    public function testCanExecuteSomeMoreSignHandling(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - some more sign handling.txt',
            file_get_contents(__DIR__ . '/output/07 - some more sign handling.txt')
        );
    }

    /**
     * Test that the code can be executed for "Several random cases".
     *
     * @group simpleFractionToMixedNumber_severalRandomCases
     */
    public function testCanExecuteSeveralRandomCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - several random cases.txt',
            file_get_contents(__DIR__ . '/output/08 - several random cases.txt')
        );
    }
}
