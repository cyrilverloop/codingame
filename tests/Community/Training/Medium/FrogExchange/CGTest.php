<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FrogExchange;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FrogExchange\FrogExchange;

/**
 * Tests for the "Frog exchange" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FrogExchange\FrogExchange
 * @group frogExchange
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FrogExchange();
    }

    /**
     * Test that the code can be executed for "n=3 m starts left".
     *
     * @group frogExchange_n3MStartsLeft
     */
    public function testCanExecuteN3MStartsLeft(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - n=3 m starts left.txt',
            file_get_contents(__DIR__ . '/output/01 - n=3 m starts left.txt')
        );
    }

    /**
     * Test that the code can be executed for "n=5 m starts left".
     *
     * @group frogExchange_n5MStartsLeft
     */
    public function testCanExecuteN5MStartsLeft(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - n=5 m starts left.txt',
            file_get_contents(__DIR__ . '/output/02 - n=5 m starts left.txt')
        );
    }

    /**
     * Test that the code can be executed for "n=11 m starts left".
     *
     * @group frogExchange_n11MStartsLeft
     */
    public function testCanExecuteN11MStartsLeft(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - n=11 m starts left.txt',
            file_get_contents(__DIR__ . '/output/03 - n=11 m starts left.txt')
        );
    }

    /**
     * Test that the code can be executed for "No frog one stone".
     *
     * @group frogExchange_noFrogOneStone
     */
    public function testCanExecuteNoFrogOneStone(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no frog one stone.txt',
            "s" . PHP_EOL
        );
    }
}
