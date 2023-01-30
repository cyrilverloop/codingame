<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LongestIncreasingSubsequence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\LongestIncreasingSubsequence\LongestIncreasingSubsequence;

/**
 * Tests for the "Longest increasing subsequence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LongestIncreasingSubsequence\LongestIncreasingSubsequence
 * @group longestIncreasingSubsequence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new LongestIncreasingSubsequence();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group longestIncreasingSubsequence_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Still simple".
     *
     * @group longestIncreasingSubsequence_stillSimple
     */
    public function testCanExecuteStillSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - still simple.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium".
     *
     * @group longestIncreasingSubsequence_medium
     */
    public function testCanExecuteMedium(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Getting harder".
     *
     * @group longestIncreasingSubsequence_gettingHarder
     */
    public function testCanExecuteGettingHarder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - getting harder.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lots of numbers!".
     *
     * @group longestIncreasingSubsequence_lotsOfNumbers
     */
    public function testCanExecuteLotsOfNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - lots of numbers!.txt',
            94 . PHP_EOL
        );
    }
}
