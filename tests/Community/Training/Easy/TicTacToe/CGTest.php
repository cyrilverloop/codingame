<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TicTacToe;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TicTacToe\TicTacToe;

/**
 * Tests for the "TicTacToe" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TicTacToe\TicTacToe
 * @group ticTacToe
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TicTacToe();
    }

    /**
     * Test that the code can be executed for "No opponent - line".
     *
     * @group ticTacToe_noOpponentLine
     */
    public function testCanExecuteNoOpponentLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - no opponent - line.txt',
            file_get_contents(__DIR__ . '/output/01 - no opponent - line.txt')
        );
    }

    /**
     * Test that the code can be executed for "No opponent - column".
     *
     * @group ticTacToe_noOpponentColumn
     */
    public function testCanExecuteNoOpponentColumn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no opponent - column.txt',
            file_get_contents(__DIR__ . '/output/02 - no opponent - column.txt')
        );
    }

    /**
     * Test that the code can be executed for "No opponent - diagonal".
     *
     * @group ticTacToe_noOpponentDiagonal
     */
    public function testCanExecuteNoOpponentDiagonal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no opponent - diagonal.txt',
            file_get_contents(__DIR__ . '/output/03 - no opponent - diagonal.txt')
        );
    }

    /**
     * Test that the code can be executed for "Real condition".
     *
     * @group ticTacToe_realCondition
     */
    public function testCanExecuteRealCondition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - real condition.txt',
            file_get_contents(__DIR__ . '/output/04 - real condition.txt')
        );
    }

    /**
     * Test that the code can be executed for "No win condition".
     *
     * @group ticTacToe_noWinCondition
     */
    public function testCanExecuteNoWinCondition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - no win condition.txt',
            "false" . PHP_EOL
        );
    }
}
