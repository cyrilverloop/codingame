<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\FlipTheSign;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\FlipTheSign\FlipTheSign;

/**
 * Tests for the "Flip the sign" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\FlipTheSign\FlipTheSign
 * @group flipTheSign
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FlipTheSign();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group flipTheSign_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 2".
     *
     * @group flipTheSign_example2
     */
    public function testCanExecuteExample2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - example 2.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group flipTheSign_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group flipTheSign_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group flipTheSign_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group flipTheSign_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "true" . PHP_EOL
        );
    }
}
