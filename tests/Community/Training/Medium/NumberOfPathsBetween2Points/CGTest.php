<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\NumberOfPathsBetween2Points;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\NumberOfPathsBetween2Points\NumberOfPathsBetween2Points;

/**
 * Tests for the "Number of paths between 2 points" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\NumberOfPathsBetween2Points\NumberOfPathsBetween2Points
 * @group numberOfPathsBetween2Points
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NumberOfPathsBetween2Points();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group numberOfPathsBetween2Points_test1
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
     * @group numberOfPathsBetween2Points_test2
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
     * @group numberOfPathsBetween3Points_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            2716 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group numberOfPathsBetween4Points_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            0 . PHP_EOL
        );
    }
}
