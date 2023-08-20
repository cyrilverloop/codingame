<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OneBillionDWorld;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OneBillionDWorld\OneBillionDWorld;

/**
 * Tests for the "1000000000D world" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OneBillionDWorld\OneBillionDWorld
 * @group oneBillionDWorld
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OneBillionDWorld();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group oneBillionDWorld_test1
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
     * @group oneBillionDWorld_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            17 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group oneBillionDWorld_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            -1000000000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group oneBillionDWorld_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            -1999999395 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group oneBillionDWorld_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            9221165894 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group oneBillionDWorld_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group oneBillionDWorld_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            -213982941 . PHP_EOL
        );
    }
}
