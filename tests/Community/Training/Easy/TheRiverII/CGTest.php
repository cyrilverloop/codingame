<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheRiverII;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TheRiverII\TheRiverII;

/**
 * Tests for the "The river II" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheRiverII\TheRiverII
 * @group theRiverII
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheRiverII();
    }

    /**
     * Test that the code can be executed for "Test 20".
     *
     * @group theRiverII_test20
     */
    public function testCanExecuteTest20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 20.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The lucky 13".
     *
     * @group theRiverII_theLucky13
     */
    public function testCanExecuteTheLucky13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - the lucky 13.txt',
            'YES' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "yyy".
     *
     * @group theRiverII_yyy
     */
    public function testCanExecuteYyy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - yyy.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "zzzz".
     *
     * @group theRiverII_zzzz
     */
    public function testCanExecuteZzzz(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - zzzz.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Yes, please".
     *
     * @group theRiverII_yesPlease
     */
    public function testCanExecuteYesPlease(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - yes, please.txt',
            'YES' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4aaaa".
     *
     * @group theRiverII_4aaaa
     */
    public function testCanExecute4aaaa(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 4aaaa.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "BIG".
     *
     * @group theRiverII_BIG
     */
    public function testCanExecuteBIG(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - BIG.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maybe yes this time".
     *
     * @group theRiverII_maybeYesThisTime
     */
    public function testCanExecuteMaybeYesThisTime(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - maybe yes this time.txt',
            'YES' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random #1".
     *
     * @group theRiverII_random1
     */
    public function testCanExecuteRandom1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - random #1.txt',
            'YES' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random #2".
     *
     * @group theRiverII_random2
     */
    public function testCanExecuteRandom2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - random #2.txt',
            'NO' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random Large".
     *
     * @group theRiverII_randomLarge
     */
    public function testCanExecuteRandomLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - random large.txt',
            'YES' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random Small".
     *
     * @group theRiverII_randomSmall
     */
    public function testCanExecuteRandomSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - random small.txt',
            'YES' . PHP_EOL
        );
    }
}
