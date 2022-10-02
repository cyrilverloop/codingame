<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Othello;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\Othello\Othello;

/**
 * Tests for the "Othello" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Othello\Othello
 * @group othello
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Othello();
    }

    /**
     * Test that the code can be executed for "Start".
     *
     * @group othello_start
     */
    public function testCanExecuteStart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - start.txt',
            "1 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nope".
     *
     * @group othello_nope
     */
    public function testCanExecuteNope(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - nope.txt',
            "NOPE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Null".
     *
     * @group othello_null
     */
    public function testCanExecuteNull(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - null.txt',
            "NULL" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Real game".
     *
     * @group othello_realGame
     */
    public function testCanExecuteRealGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - real game.txt',
            "14 24" . PHP_EOL
        );
    }
}
