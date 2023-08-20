<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheDart101;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\TheDart101\TheDart101;

/**
 * Tests for the "The dart 101" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheDart101\TheDart101
 * @group theDart101
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheDart101();
    }

    /**
     * Test that the code can be executed for "2 players".
     *
     * @group theDart101_2Players
     */
    public function testCanExecute2Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2 players.txt',
            "Hugo" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1 winner & 1 loser".
     *
     * @group theDart101_1WinnerAnd1Loser
     */
    public function testCanExecute1WinnerAnd1Loser(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 1 winner & 1 loser.txt',
            "Lisa" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One missed".
     *
     * @group theDart101_oneMissed
     */
    public function testCanExecuteOneMissed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one missed.txt',
            "Candice" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two missed".
     *
     * @group theDart101_twoMissed
     */
    public function testCanExecuteTwoMissed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two missed.txt',
            "Fred" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two missed consecutively".
     *
     * @group theDart101_twoMissedConsecutively
     */
    public function testCanExecuteTwoMissedConsecutively(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - two missed consecutively.txt',
            "Herve" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Three missed consecutively".
     *
     * @group theDart101_threeMissedConsecutively
     */
    public function testCanExecuteThreeMissedConsecutively(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - three missed consecutively.txt',
            "Cecile" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Over the score".
     *
     * @group theDart101_OverTheScore
     */
    public function testCanExecuteOverTheScore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - over the score.txt',
            "Nicolas" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 players and lot of shoots".
     *
     * @group theDart101_2PlayersAndLotOfShoots
     */
    public function testCanExecute2PlayersAndLotOfShoots(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 2 players and lot of shoots.txt',
            "Ludo" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4 players".
     *
     * @group theDart101_4Players
     */
    public function testCanExecute4Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 4 players.txt',
            "Patricia" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "8 players".
     *
     * @group theDart101_8Players
     */
    public function testCanExecute8Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - 8 players.txt',
            "David" . PHP_EOL
        );
    }
}
