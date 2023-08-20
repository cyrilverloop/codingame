<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DivideTheFactorial;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DivideTheFactorial\DivideTheFactorial;

/**
 * Tests for the "Divide the factorial" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DivideTheFactorial\DivideTheFactorial
 * @group divideTheFactorial
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DivideTheFactorial();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group divideTheFactorial_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group divideTheFactorial_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group divideTheFactorial_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group divideTheFactorial_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            6069 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group divideTheFactorial_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group divideTheFactorial_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group divideTheFactorial_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            331 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group divideTheFactorial_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group divideTheFactorial_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            0 . PHP_EOL
        );
    }
}
