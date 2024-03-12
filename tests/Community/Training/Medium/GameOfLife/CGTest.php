<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GameOfLife;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\GameOfLife\GameOfLife;

/**
 * Tests for the "Game of life" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GameOfLife\GameOfLife
 * @group gameOfLife
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GameOfLife();
    }

    /**
     * Test that the code can be executed for "3x3".
     *
     * @group gameOfLife_3x3
     */
    public function testCanExecute3x3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 3x3.txt',
            file_get_contents(__DIR__ . '/output/01 - 3x3.txt')
        );
    }

    /**
     * Test that the code can be executed for "3x3".
     *
     * @group gameOfLife_3x3_2
     */
    public function testCanExecute3x3_2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3x3.txt',
            file_get_contents(__DIR__ . '/output/02 - 3x3.txt')
        );
    }

    /**
     * Test that the code can be executed for "26x5".
     *
     * @group gameOfLife_26x5
     */
    public function testCanExecute26x5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 26x5.txt',
            file_get_contents(__DIR__ . '/output/03 - 26x5.txt')
        );
    }

    /**
     * Test that the code can be executed for "1x100".
     *
     * @group gameOfLife_1x100
     */
    public function testCanExecute1x100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 1x100.txt',
            file_get_contents(__DIR__ . '/output/04 - 1x100.txt')
        );
    }

    /**
     * Test that the code can be executed for "100x1".
     *
     * @group gameOfLife_100x1
     */
    public function testCanExecute100x1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 100x1.txt',
            file_get_contents(__DIR__ . '/output/05 - 100x1.txt')
        );
    }

    /**
     * Test that the code can be executed for "30x30".
     *
     * @group gameOfLife_30x30
     */
    public function testCanExecute30x30(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 30x30.txt',
            file_get_contents(__DIR__ . '/output/06 - 30x30.txt')
        );
    }

    /**
     * Test that the code can be executed for "1x1".
     *
     * @group gameOfLife_1x1
     */
    public function testCanExecute1x1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 1x1.txt',
            0 . PHP_EOL
        );
    }
}
