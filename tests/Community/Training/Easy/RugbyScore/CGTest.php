<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RugbyScore;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RugbyScore\RugbyScore;

/**
 * Tests for the "Rugby score" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RugbyScore\RugbyScore
 * @group rugbyScore
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RugbyScore();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group rugbyScore_test1
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
     * @group rugbyScore_test2
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
     * @group rugbyScore_test3
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
     * @group rugbyScore_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }
}
