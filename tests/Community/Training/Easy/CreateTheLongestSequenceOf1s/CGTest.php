<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CreateTheLongestSequenceOf1s;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\CreateTheLongestSequenceOf1s\CreateTheLongestSequenceOf1s;

/**
 * Tests for the "Create the longest sequence of 1s" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CreateTheLongestSequenceOf1s\CreateTheLongestSequenceOf1s
 * @group createTheLongestSequenceOf1s
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CreateTheLongestSequenceOf1s();
    }

    /**
     * Test that the code can be executed for "2 bits".
     *
     * @group createTheLongestSequenceOf1s_2Bits
     */
    public function testCanExecute2Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2 bits.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5 bits".
     *
     * @group createTheLongestSequenceOf1s_5Bits
     */
    public function testCanExecute5Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 5 bits.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "11 bits".
     *
     * @group createTheLongestSequenceOf1s_11Bits
     */
    public function testCanExecute11Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 11 bits.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "50 bits".
     *
     * @group createTheLongestSequenceOf1s_50Bits
     */
    public function testCanExecute50Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 50 bits.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "100 bits".
     *
     * @group createTheLongestSequenceOf1s_100Bits
     */
    public function testCanExecute100Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 100 bits.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "999 bits".
     *
     * @group createTheLongestSequenceOf1s_999Bits
     */
    public function testCanExecute999Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 999 bits.txt',
            23 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "32 bits".
     *
     * @group createTheLongestSequenceOf1s_32Bits
     */
    public function testCanExecute32Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 32 bits.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "20 bits".
     *
     * @group createTheLongestSequenceOf1s_20Bits
     */
    public function testCanExecute20Bits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 20 bits.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Whole string".
     *
     * @group createTheLongestSequenceOf1s_wholeString
     */
    public function testCanExecuteWholeString(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - whole string.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All zeros".
     *
     * @group createTheLongestSequenceOf1s_allZeros
     */
    public function testCanExecuteAllZeros(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - all zeros.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Gaps".
     *
     * @group createTheLongestSequenceOf1s_gaps
     */
    public function testCanExecuteGaps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - gaps.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random 100".
     *
     * @group createTheLongestSequenceOf1s_random100
     */
    public function testCanExecuteRandom100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - random 100.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random 32".
     *
     * @group createTheLongestSequenceOf1s_random32
     */
    public function testCanExecuteRandom32(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - random 32.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Gaps 2".
     *
     * @group createTheLongestSequenceOf1s_gaps2
     */
    public function testCanExecuteGaps2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - gaps 2.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Steps".
     *
     * @group createTheLongestSequenceOf1s_steps
     */
    public function testCanExecuteSteps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - steps.txt',
            12 . PHP_EOL
        );
    }
}
