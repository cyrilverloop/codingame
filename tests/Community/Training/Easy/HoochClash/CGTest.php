<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HoochClash;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\HoochClash\HoochClash;

/**
 * Tests for the "Hooch clash" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HoochClash\HoochClash
 * @group hoochClash
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HoochClash();
    }

    /**
     * Test that the code can be executed for "This is fun!".
     *
     * @group hoochClash_thisIsFun
     */
    public function testCanExecuteThisIsFun(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - this is fun!.txt',
            "1 12" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "This is valid!".
     *
     * @group hoochClash_thisIsValid
     */
    public function testCanExecuteThisIsValid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - this is valid!.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fun enough".
     *
     * @group hoochClash_funEnough
     */
    public function testCanExecuteFunEnough(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - fun enough.txt',
            "11 493" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Whee".
     *
     * @group hoochClash_whee
     */
    public function testCanExecuteWhee(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - whee.txt',
            "22 986" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Higher".
     *
     * @group hoochClash_higher
     */
    public function testCanExecuteHigher(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - higher.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Much higher".
     *
     * @group hoochClash_muchHigher
     */
    public function testCanExecuteMuchHigher(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - much higher.txt',
            "1200 2680" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Crazy high".
     *
     * @group hoochClash_crazyHigh
     */
    public function testCanExecuteCrazyHigh(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - crazy high.txt',
            "2719 2790" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Stoned".
     *
     * @group hoochClash_stoned
     */
    public function testCanExecuteStoned(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - stoned.txt',
            "1290 2881" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Overflow".
     *
     * @group hoochClash_overflow
     */
    public function testCanExecuteOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - overflow.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Underflow".
     *
     * @group hoochClash_underflow
     */
    public function testCanExecuteUnderflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - underflow.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "B&B".
     *
     * @group hoochClash_BB
     */
    public function testCanExecuteBB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - B&B.txt',
            "VALID" . PHP_EOL
        );
    }
}
