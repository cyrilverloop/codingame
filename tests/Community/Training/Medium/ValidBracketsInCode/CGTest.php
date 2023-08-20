<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ValidBracketsInCode;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ValidBracketsInCode\ValidBracketsInCode;

/**
 * Tests for the "Valid brackets in code" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ValidBracketsInCode\ValidBracketsInCode
 * @group validBracketsInCode
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ValidBracketsInCode();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group calidBracketsInCode_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group calidBracketsInCode_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "Invalid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group calidBracketsInCode_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "No brackets" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group calidBracketsInCode_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "No brackets" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group calidBracketsInCode_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group calidBracketsInCode_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "Invalid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group calidBracketsInCode_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group calidBracketsInCode_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "Invalid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group calidBracketsInCode_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 10".
     *
     * @group calidBracketsInCode_test10
     */
    public function testCanExecuteTest10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 11".
     *
     * @group calidBracketsInCode_test11
     */
    public function testCanExecuteTest11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - test 11.txt',
            "No brackets" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 12".
     *
     * @group calidBracketsInCode_test12
     */
    public function testCanExecuteTest12(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - test 12.txt',
            "No brackets" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 13".
     *
     * @group calidBracketsInCode_test13
     */
    public function testCanExecuteTest13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - test 13.txt',
            "Valid" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 14".
     *
     * @group calidBracketsInCode_test14
     */
    public function testCanExecuteTest14(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - test 14.txt',
            "No brackets" . PHP_EOL
        );
    }
}
