<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DieHandedness;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\DieHandedness\DieHandedness;

/**
 * Tests for the "Die handedness" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DieHandedness\DieHandedness
 * @group dieHandedness
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DieHandedness();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group dieHandedness_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "right-handed" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group dieHandedness_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "degenerate" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group dieHandedness_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "left-handed" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group dieHandedness_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "degenerate" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group dieHandedness_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "right-handed" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group dieHandedness_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "degenerate" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group dieHandedness_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "left-handed" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group dieHandedness_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "right-handed" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group dieHandedness_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            "degenerate" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 10".
     *
     * @group dieHandedness_test10
     */
    public function testCanExecuteTest10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10.txt',
            "degenerate" . PHP_EOL
        );
    }
}
