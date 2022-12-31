<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RearrangeStringToTwoNumbers;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\RearrangeStringToTwoNumbers\RearrangeStringToTwoNumbers;

/**
 * Tests for the "Rearrange string to two numbers" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RearrangeStringToTwoNumbers\RearrangeStringToTwoNumbers
 * @group rearrangeStringToTwoNumbers
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RearrangeStringToTwoNumbers();
    }

    /**
     * Test that the code can be executed for "Two digits".
     *
     * @group rearrangeStringToTwoNumbers_twoDigits
     */
    public function testCanExecuteTwoDigits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - two digits.txt',
            "2 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many digits".
     *
     * @group rearrangeStringToTwoNumbers_tooManyDigits
     */
    public function testCanExecuteTooManyDigits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - too many digits.txt',
            "-1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum B".
     *
     * @group rearrangeStringToTwoNumbers_maximumB
     */
    public function testCanExecuteMaximumB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - maximum B.txt',
            "400005555567778999 1000000000000000000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many 0's".
     *
     * @group rearrangeStringToTwoNumbers_tooMany0s
     */
    public function testCanExecuteTooMany0s(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - too many 0s.txt',
            "-1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum B with 0".
     *
     * @group rearrangeStringToTwoNumbers_maximumBWith0
     */
    public function testCanExecuteMaximumBWith0(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - maximum B with 0.txt',
            "0 1000000000000000000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small A maximum B".
     *
     * @group rearrangeStringToTwoNumbers_smallAMaximumB
     */
    public function testCanExecuteSmallAMaximumB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - small A maximum B.txt',
            "4 1000000000000000000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small A big B".
     *
     * @group rearrangeStringToTwoNumbers_smallABigB
     */
    public function testCanExecuteSmallABigB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - small A big B.txt',
            "20 200223334577788999" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many 0's".
     *
     * @group rearrangeStringToTwoNumbers_tooMany0s2
     */
    public function testCanExecuteTooMany0s2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - too many 0s - 2.txt',
            "-1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too few digits".
     *
     * @group rearrangeStringToTwoNumbers_tooFewDigits
     */
    public function testCanExecuteTooFewDigits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - too few digits.txt',
            "-1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many digits".
     *
     * @group rearrangeStringToTwoNumbers_tooManyDigits2
     */
    public function testCanExecuteTooManyDigits2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - too many digits.txt',
            "-1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zero".
     *
     * @group rearrangeStringToTwoNumbers_zero
     */
    public function testCanExecuteZero(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - zero.txt',
            "0 400004566667788899" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum".
     *
     * @group rearrangeStringToTwoNumbers_maximum
     */
    public function testCanExecuteMaximum(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - maximum.txt',
            "1000000000000000000 1000000000000000000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big with 0's".
     *
     * @group rearrangeStringToTwoNumbers_bigWith0s
     */
    public function testCanExecuteBigWith0s(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - big with 0s.txt',
            "200000222233333345 566777777888999999" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big".
     *
     * @group rearrangeStringToTwoNumbers_big
     */
    public function testCanExecuteBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - big.txt',
            "111112222333355566 777778888889999999" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Internal zeros".
     *
     * @group rearrangeStringToTwoNumbers_internalZeros
     */
    public function testCanExecuteInternalZeros(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - internal zeros.txt',
            "100022233334444 45555555666668899" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small A big B".
     *
     * @group rearrangeStringToTwoNumbers_smallABigB
     */
    public function testCanExecuteInternalSmallABigB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - small A big B.txt',
            "5 555566666667778899" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small A big B".
     *
     * @group rearrangeStringToTwoNumbers_smallABigB2
     */
    public function testCanExecuteInternalSmallABigB2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - small A big B - 2.txt',
            "4 44455566667788" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two digits".
     *
     * @group rearrangeStringToTwoNumbers_twoDigits
     */
    public function testCanExecuteInternaltwoDigits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - two digits.txt',
            "9 9" . PHP_EOL
        );
    }
}
