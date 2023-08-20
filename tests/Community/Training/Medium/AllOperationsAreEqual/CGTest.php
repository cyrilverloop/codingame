<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\AllOperationsAreEqual;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\AllOperationsAreEqual\AllOperationsAreEqual;

/**
 * Tests for the "All operations are equal!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\AllOperationsAreEqual\AllOperationsAreEqual
 * @group allOperationsAreEqual
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AllOperationsAreEqual();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group allOperationsAreEqual_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group allOperationsAreEqual_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group allOperationsAreEqual_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group allOperationsAreEqual_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group allOperationsAreEqual_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5.txt')
        );
    }
}
