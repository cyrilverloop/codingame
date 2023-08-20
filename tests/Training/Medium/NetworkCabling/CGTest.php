<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\NetworkCabling;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Medium\NetworkCabling\NetworkCabling;

/**
 * Tests for the "Network cabling" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\NetworkCabling\NetworkCabling
 * @group networkCabling
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NetworkCabling();
    }

    /**
     * Test that the code can be executed for "Example 1".
     *
     * @group networkCabling_example1
     */
    public function testCanExecuteExample1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example 1.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 2".
     *
     * @group networkCabling_example2
     */
    public function testCanExecuteExample2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - example 2.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 3".
     *
     * @group networkCabling_example3
     */
    public function testCanExecuteExample3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - example 3.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 4".
     *
     * @group networkCabling_example4
     */
    public function testCanExecuteExample4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - example 4.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 5".
     *
     * @group networkCabling_example5
     */
    public function testCanExecuteExample5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - example 5.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 6".
     *
     * @group networkCabling_example6
     */
    public function testCanExecuteExample6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - example 6.txt',
            6066790161 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 7".
     *
     * @group networkCabling_example7
     */
    public function testCanExecuteExample7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - example 7.txt',
            3142894 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 8".
     *
     * @group networkCabling_example8
     */
    public function testCanExecuteExample8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - example 8.txt',
            2500049998 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 9".
     *
     * @group networkCabling_example9
     */
    public function testCanExecuteExample9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - example 9.txt',
            2178614523 . PHP_EOL
        );
    }
}
