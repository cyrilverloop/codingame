<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\LargestNumber;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\LargestNumber\LargestNumber;

/**
 * Tests for the "Largest number" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\LargestNumber\LargestNumber
 * @group largestNumber
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new LargestNumber();
    }

    /**
     * Test that the code can be executed for "No change required".
     *
     * @group largestNumber_noChangeRequired
     */
    public function testCanExecuteNoChangeRequired(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - no change required.txt',
            3141 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Remove 1 digit".
     *
     * @group largestNumber_remove1Digit
     */
    public function testCanExecuteRemove1Digit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - remove 1 digit.txt',
            7265 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Remove 2 digits".
     *
     * @group largestNumber_remove2Digits
     */
    public function testCanExecuteRemove2Digits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - remove 2 digits.txt',
            4890600 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No solution".
     *
     * @group largestNumber_noSolution
     */
    public function testCanExecuteNoSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no solution.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Final test".
     *
     * @group largestNumber_finalTest
     */
    public function testCanExecuteFinalTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - final test.txt',
            67537905 . PHP_EOL
        );
    }
}
