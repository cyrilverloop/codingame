<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TexasHoldem;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TexasHoldem\TexasHoldem;

/**
 * Tests for the "Texas holdem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TexasHoldem\TexasHoldem
 * @group texasHoldem
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TexasHoldem();
    }

    /**
     * Test that the code can be executed for "Test 1 - high card".
     *
     * @group texasHoldem_test1HighCard
     */
    public function testCanExecuteTest1HighCard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1 - high card.txt',
            "1 HIGH_CARD K9875" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2 - high card, last kicker".
     *
     * @group texasHoldem_test2HighCardLastKicker
     */
    public function testCanExecuteTest2HighCardLastKicker(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2 - high card, last kicker.txt',
            "1 HIGH_CARD AK987" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3 - flush".
     *
     * @group texasHoldem_test3Flush
     */
    public function testCanExecuteTest3Flush(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3 - flush.txt',
            "1 FLUSH K9432" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4 - straight flush vs flush".
     *
     * @group texasHoldem_test4StraightFlushvsFlush
     */
    public function testCanExecuteTest4StraightFlushvsFlush(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4 - straight flush vs flush.txt',
            "1 STRAIGHT_FLUSH 5432A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5 - full house".
     *
     * @group texasHoldem_test5FullHouse
     */
    public function testCanExecuteTest5FullHouse(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5 - full house.txt',
            "2 FULL_HOUSE 66655" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6 - best two pair".
     *
     * @group texasHoldem_test6BestTwoPair
     */
    public function testCanExecuteTest6BestTwoPair(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6 - best two pair.txt',
            "2 TWO_PAIR AA669" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7 - three vs four of a kind".
     *
     * @group texasHoldem_test7ThreevsFourOfAKind
     */
    public function testCanExecuteTest7ThreevsFourOfAKind(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7 - three vs four of a kind.txt',
            "1 FOUR_OF_A_KIND 5555A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8 - draw".
     *
     * @group texasHoldem_test8Draw
     */
    public function testCanExecuteTest8Draw(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8 - draw.txt',
            "DRAW" . PHP_EOL
        );
    }
}
