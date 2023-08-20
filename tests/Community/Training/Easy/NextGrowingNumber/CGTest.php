<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NextGrowingNumber;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NextGrowingNumber\NextGrowingNumber;

/**
 * Tests for the "Next growing number" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NextGrowingNumber\NextGrowingNumber
 * @group nextGrowingNumber
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NextGrowingNumber();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group nextGrowingNumber_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            22 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group nextGrowingNumber_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            111 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group nextGrowingNumber_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            2555 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group nextGrowingNumber_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            123456888 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group nextGrowingNumber_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            11123333333333333 . PHP_EOL
        );
    }
}
