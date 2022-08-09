<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BullsAndCows;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BullsAndCows\BullsAndCows;

/**
 * Tests for the "Bulls and cows" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BullsAndCows\BullsAndCows
 * @group bullsAndCows
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BullsAndCows();
    }

    /**
     * Test that the code can be executed for "All bulls".
     *
     * @group bullsAndCows_allBulls
     */
    public function testCanExecuteAllBulls(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - all bulls.txt',
            1234 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Pair of cows".
     *
     * @group bullsAndCows_pairOfCows
     */
    public function testCanExecutePairOfCows(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - pair of cows.txt',
            "0374" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two pair of bulls".
     *
     * @group bullsAndCows_twoPairOfBulls
     */
    public function testCanExecuteTwoPairOfBulls(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - two pair of bulls.txt',
            9278 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nothing but cows".
     *
     * @group bullsAndCows_nothingButCows
     */
    public function testCanExecuteNothingButCows(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - nothing but cows.txt',
            8787 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lone bulls".
     *
     * @group bullsAndCows_loneBulls
     */
    public function testCanExecuteLoneBulls(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - lone bulls.txt',
            8528 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One for all".
     *
     * @group bullsAndCows_oneForAll
     */
    public function testCanExecuteOneForAll(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - one for all.txt',
            1111 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bad guesser".
     *
     * @group bullsAndCows_badGuesser
     */
    public function testCanExecuteBadGuesser(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - bad guesser.txt',
            7827 . PHP_EOL
        );
    }
}
