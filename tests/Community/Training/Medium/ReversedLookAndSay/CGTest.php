<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ReversedLookAndSay;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ReversedLookAndSay\ReversedLookAndSay;

/**
 * Tests for the "Reversed look-and-say" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ReversedLookAndSay\ReversedLookAndSay
 * @group reversedLookAndSay
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ReversedLookAndSay();
    }

    /**
     * Test that the code can be executed for "Test 1. An easy one".
     *
     * @group roadTrip_anEasyOne
     */
    public function testCanExecuteAnEasyOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - an easy one.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2. Not so easy".
     *
     * @group roadTrip_notSoEasy
     */
    public function testCanExecuteNotSoEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - not so easy.txt',
            111 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3. Give it a try".
     *
     * @group roadTrip_giveItATry
     */
    public function testCanExecuteGiveItATry(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - give it a try.txt',
            2222122222 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4. To infinity and beyond!".
     *
     * @group roadTrip_toInfinityAndBeyond
     */
    public function testCanExecuteToInfinityAndBeyond(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - to infinity and beyond!.txt',
            22 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5. Not a big deal".
     *
     * @group roadTrip_notABigDeal
     */
    public function testCanExecuteNotABigDeal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - not a big deal.txt',
            11123 . PHP_EOL
        );
    }
}
