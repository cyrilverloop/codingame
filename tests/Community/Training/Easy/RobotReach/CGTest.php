<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RobotReach;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\RobotReach\RobotReach;

/**
 * Tests for the "Robot reach" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RobotReach\RobotReach
 * @group robotReach
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RobotReach();
    }

    /**
     * Test that the code can be executed for "Simple 3x3".
     *
     * @group robotReach_simple3x3
     */
    public function testCanExecuteSimple3By3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple 3x3.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple 3x3 - 3".
     *
     * @group robotReach_simple3x33
     */
    public function testCanExecuteSimple3By33(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple 3x3 - 3.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group robotReach_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            59 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group robotReach_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            636 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group robotReach_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            3 . PHP_EOL
        );
    }
}
