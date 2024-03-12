<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SimpleAIDuels;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SimpleAIDuels\SimpleAIDuels;

/**
 * Tests for the "Simple AI duels" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SimpleAIDuels\SimpleAIDuels
 * @group simpleAIDuels
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SimpleAIDuels();
    }

    /**
     * Test that the code can be executed for "Nice guys".
     *
     * @group simpleAIDuels_niceGuys
     */
    public function testCanExecuteNiceGuys(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - nice guys.txt',
            "DRAW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No more Mr nice guy".
     *
     * @group simpleAIDuels_noMoreMrNiceGuy
     */
    public function testCanExecuteNoMoreMrNiceGuy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no more mr nice guy.txt',
            "BadGuy" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two jokers".
     *
     * @group simpleAIDuels_twoJokers
     */
    public function testCanExecuteTwoJokers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - two jokers.txt',
            "Joker2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tit for tat".
     *
     * @group simpleAIDuels_titForTat
     */
    public function testCanExecuteTitForTat(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - tit for tat.txt',
            "Joker" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nice guy but don’t fool me".
     *
     * @group simpleAIDuels_niceGuyButDontFoolMe
     */
    public function testCanExecuteNiceGuyButDontFoolMe(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - nice guy but don’t fool me.txt',
            "DRAW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Short memory nice guy".
     *
     * @group simpleAIDuels_shortMemoryNiceGuy
     */
    public function testCanExecuteShortMemoryNiceGuy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - short memory nice guy.txt',
            "BirdyNiceGuy" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Machiavel".
     *
     * @group simpleAIDuels_machiavel
     */
    public function testCanExecuteMachiavel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - machiavel.txt',
            "FlipFlop" . PHP_EOL
        );
    }
}
