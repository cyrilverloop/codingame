<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HoleyTimes;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\HoleyTimes\HoleyTimes;

/**
 * Tests for the "Holey times" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HoleyTimes\HoleyTimes
 * @group holeyTimes
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HoleyTimes();
    }

    /**
     * Test that the code can be executed for "One missing digit in the operand".
     *
     * @group holeyTimes_oneMissingDigitInTheOperand
     */
    public function testCanExecuteOneMissingDigitInTheOperand(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one missing digit in the operand.txt',
            file_get_contents(__DIR__ . '/output/01 - one missing digit in the operand.txt')
        );
    }

    /**
     * Test that the code can be executed for "Missing digits in the operands".
     *
     * @group holeyTimes_missingDigitsInTheOperands
     */
    public function testCanExecuteMissingDigitsInTheOperands(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - missing digits in the operands.txt',
            file_get_contents(__DIR__ . '/output/02 - missing digits in the operands.txt')
        );
    }

    /**
     * Test that the code can be executed for "Missing digits in the partial results".
     *
     * @group holeyTimes_missingDigitsInThePartialResults
     */
    public function testCanExecuteMissingDigitsInThePartialResults(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - missing digits in the partial results.txt',
            file_get_contents(__DIR__ . '/output/03 - missing digits in the partial results.txt')
        );
    }

    /**
     * Test that the code can be executed for "Missing digits in the result".
     *
     * @group holeyTimes_missingDigitsInTheResult
     */
    public function testCanExecuteMissingDigitsInTheResult(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - missing digits in the result.txt',
            file_get_contents(__DIR__ . '/output/04 - missing digits in the result.txt')
        );
    }

    /**
     * Test that the code can be executed for "Missing digits everywhere".
     *
     * @group holeyTimes_missingDigitsEverywhere
     */
    public function testCanExecuteMissingDigitsEverywhere(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - missing digits everywhere.txt',
            file_get_contents(__DIR__ . '/output/05 - missing digits everywhere.txt')
        );
    }

    /**
     * Test that the code can be executed for "No leading zeros".
     *
     * @group holeyTimes_noLeadingZeros
     */
    public function testCanExecuteNoLeadingZeros(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - no leading zeros.txt',
            file_get_contents(__DIR__ . '/output/06 - no leading zeros.txt')
        );
    }

    /**
     * Test that the code can be executed for "Mind the hole".
     *
     * @group holeyTimes_mindTheHole
     */
    public function testCanExecuteMindTheHole(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - mind the hole.txt',
            file_get_contents(__DIR__ . '/output/07 - mind the hole.txt')
        );
    }

    /**
     * Test that the code can be executed for "The tough one".
     *
     * @group holeyTimes_theToughOne
     */
    public function testCanExecuteTheToughOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - the tough one.txt',
            file_get_contents(__DIR__ . '/output/08 - the tough one.txt')
        );
    }
}
