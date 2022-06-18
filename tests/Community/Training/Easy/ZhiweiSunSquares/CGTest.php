<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ZhiweiSunSquares;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\ZhiweiSunSquares\ZhiweiSunSquares;

/**
 * Tests for the "Zhiwei Sun squares" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ZhiweiSunSquares\ZhiweiSunSquares
 * @group ZhiweiSunSquares
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ZhiweiSunSquares();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group ZhiweiSunSquares_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group ZhiweiSunSquares_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group ZhiweiSunSquares_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group ZhiweiSunSquares_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group ZhiweiSunSquares_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group ZhiweiSunSquares_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            43 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group ZhiweiSunSquares_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            313 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group ZhiweiSunSquares_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            65 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group ZhiweiSunSquares_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            1 . PHP_EOL
        );
    }
}
