<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SnakeEncoding;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SnakeEncoding\SnakeEncoding;

/**
 * Tests for the "Snake encoding" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SnakeEncoding\SnakeEncoding
 * @group snakeEncoding
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SnakeEncoding();
    }

    /**
     * Test that the code can be executed for "Easy peasy".
     *
     * @group snakeEncoding_easyPeasy
     */
    public function testCanExecuteEasyPeasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy peasy.txt',
            file_get_contents(__DIR__ . '/output/01 - easy peasy.txt')
        );
    }

    /**
     * Test that the code can be executed for "More rows".
     *
     * @group snakeEncoding_moreRows
     */
    public function testCanExecuteMoreRows(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more rows.txt',
            file_get_contents(__DIR__ . '/output/02 - more rows.txt')
        );
    }

    /**
     * Test that the code can be executed for "More loops".
     *
     * @group snakeEncoding_moreLoops
     */
    public function testCanExecuteMoreLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more loops.txt',
            file_get_contents(__DIR__ . '/output/03 - more loops.txt')
        );
    }

    /**
     * Test that the code can be executed for "Let's try everything".
     *
     * @group snakeEncoding_letsTryEverything
     */
    public function testCanExecuteLetsTryEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - let\'s try everything.txt',
            file_get_contents(__DIR__ . '/output/04 - let\'s try everything.txt')
        );
    }
}
