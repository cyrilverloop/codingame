<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheRiverI;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\TheRiverI\TheRiverI;

/**
 * Tests for the "The river I" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheRiverI\TheRiverI
 * @group theRiverI
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheRiverI();
    }

    /**
     * Test that the code can be executed for "We will meet at 47".
     *
     * @group theRiverI_weWillMeetAt47
     */
    public function testCanExecuteWeWillMeetAt47(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - we will meet at 47.txt',
            47 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "r1 < r2".
     *
     * @group theRiverI_r1LTr2
     */
    public function testCanExecuteR1LTr2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - r1 < r2.txt',
            111 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "r1 > r2".
     *
     * @group theRiverI_r1GTr2
     */
    public function testCanExecuteR1GTr2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - r1 > r2.txt',
            620 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More than... I.".
     *
     * @group theRiverI_moreThanI
     */
    public function testCanExecuteMoreThanI(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - more than I.txt',
            483 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More than... II.".
     *
     * @group theRiverI_moreThanII
     */
    public function testCanExecuteMoreThanII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more than II.txt',
            2103 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "River 2489".
     *
     * @group theRiverI_river2489
     */
    public function testCanExecuteRiver2489(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - river 2489.txt',
            5215 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "River 13".
     *
     * @group theRiverI_river13
     */
    public function testCanExecuteRiver13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - river 13.txt',
            20014 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Primes".
     *
     * @group theRiverI_primes
     */
    public function testCanExecutePrimes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - primes.txt',
            1118 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Even bigger".
     *
     * @group theRiverI_evenBigger
     */
    public function testCanExecuteEvenBigger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - even bigger.txt',
            15490633 . PHP_EOL
        );
    }
}
