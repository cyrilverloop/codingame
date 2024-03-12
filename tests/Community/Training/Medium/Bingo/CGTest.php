<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Bingo;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Bingo\Bingo;

/**
 * Tests for the "Bingo!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Bingo\Bingo
 * @group bingo
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Bingo();
    }

    /**
     * Test that the code can be executed for "1 player".
     *
     * @group bingo_1Player
     */
    public function testCanExecute1Player(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1 player.txt',
            file_get_contents(__DIR__ . '/output/01 - 1 player.txt')
        );
    }

    /**
     * Test that the code can be executed for "5 players".
     *
     * @group bingo_5Players
     */
    public function testCanExecute5Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 5 players.txt',
            file_get_contents(__DIR__ . '/output/02 - 5 players.txt')
        );
    }

    /**
     * Test that the code can be executed for "25 players".
     *
     * @group bingo_25Players
     */
    public function testCanExecute25Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 25 players.txt',
            file_get_contents(__DIR__ . '/output/03 - 25 players.txt')
        );
    }

    /**
     * Test that the code can be executed for "100 players".
     *
     * @group bingo_100Players
     */
    public function testCanExecute100Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 100 players.txt',
            file_get_contents(__DIR__ . '/output/04 - 100 players.txt')
        );
    }
}
