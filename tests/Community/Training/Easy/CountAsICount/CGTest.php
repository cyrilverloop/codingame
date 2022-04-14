<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CountAsICount;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\CountAsICount\CountAsICount;

/**
 * Tests for the "Count as i count" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CountAsICount\CountAsICount
 * @group countAsICount
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CountAsICount();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group countAsICount_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "To continue".
     *
     * @group countAsICount_toContinue
     */
    public function testCanExecuteToContinue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - to continue.txt',
            1776 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only one".
     *
     * @group countAsICount_onlyOne
     */
    public function testCanExecuteOnlyOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - only one.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Near victory".
     *
     * @group countAsICount_nearVictory
     */
    public function testCanExecuteNearVictory(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - near victory.txt',
            176 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Impossible".
     *
     * @group countAsICount_impossible
     */
    public function testCanExecuteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - impossible.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Strike !!!".
     *
     * @group countAsICount_strike
     */
    public function testCanExecuteStrike(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - strike !!!.txt',
            16 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A lot".
     *
     * @group countAsICount_aLot
     */
    public function testCanExecuteALot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - a lot.txt',
            16148 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A lot bis".
     *
     * @group countAsICount_aLotBis
     */
    public function testCanExecuteALotBis(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - a lot bis.txt',
            16552 . PHP_EOL
        );
    }
}
