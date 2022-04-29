<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\War;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\War\War;

/**
 * Tests for the "War" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\War\War
 * @group war
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new War();
    }

    /**
     * Test that the code can be executed for "3 cards".
     *
     * @group war_3cards
     */
    public function testCanExecute3Cards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 3 cards.txt',
            "1 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "26 cards".
     *
     * @group war_26cards
     */
    public function testCanExecute26Cards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 26 cards.txt',
            "2 26" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "26 cards, medium length".
     *
     * @group war_26cardsMediumLength
     */
    public function testCanExecute26CardsMediumLength(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 26 cards medium length.txt',
            "2 56" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Battle".
     *
     * @group war_battle
     */
    public function testCanExecuteBattle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - battle.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One game, one battle".
     *
     * @group war_oneGameOneBattle
     */
    public function testCanExecuteOneGameOneBattle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - one game one battle.txt',
            "1 52" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 chained battles".
     *
     * @group war_2ChainedBattles
     */
    public function testCanExecute2ChainedBattles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 2 chained battles.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long game".
     *
     * @group war_longGame
     */
    public function testCanExecuteLongGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - long game.txt',
            "2 1262" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "PAT".
     *
     * @group war_PAT
     */
    public function testCanExecutePAT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - PAT.txt',
            "PAT" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another PAT".
     *
     * @group war_anotherPAT
     */
    public function testCanExecuteAnotherPAT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - another PAT.txt',
            "PAT" . PHP_EOL
        );
    }
}
