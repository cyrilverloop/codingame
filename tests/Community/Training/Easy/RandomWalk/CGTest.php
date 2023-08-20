<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RandomWalk;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RandomWalk\RandomWalk;

/**
 * Tests for the "Random walk" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RandomWalk\RandomWalk
 * @group randomWalk
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RandomWalk();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group randomWalk_test1
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
     * @group randomWalk_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            130 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group randomWalk_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            1774 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group randomWalk_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            20898 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group randomWalk_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            369002 . PHP_EOL
        );
    }
}
