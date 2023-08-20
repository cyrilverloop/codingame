<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Divine;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Divine\Divine;

/**
 * Tests for the "Divine!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Divine\Divine
 * @group divine
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Divine();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group divine_test1
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
     * @group divine_test2
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
     * @group divine_test3
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
     * @group divine_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }
}
