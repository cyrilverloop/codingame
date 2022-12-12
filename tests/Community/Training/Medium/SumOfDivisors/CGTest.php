<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SumOfDivisors;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\SumOfDivisors\SumOfDivisors;

/**
 * Tests for the "Sum of divisors" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SumOfDivisors\SumOfDivisors
 * @group sumOfDivisors
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SumOfDivisors();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group sumOfDivisors_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group sumOfDivisors_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            87 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group sumOfDivisors_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            823081 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No brute-force here".
     *
     * @group sumOfDivisors_noBruteForceHere
     */
    public function testCanExecuteNoBruteForceHere(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no brute-force here.txt',
            6662106690 . PHP_EOL
        );
    }
}
