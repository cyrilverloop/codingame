<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheStonemason;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TheStonemason\TheStonemason;

/**
 * Tests for the "The voucher" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheStonemason\TheStonemason
 * @group theStonemason
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheStonemason();
    }

    /**
     * Test that the code can be executed for "One".
     *
     * @group theStonemason_one
     */
    public function testCanExecuteOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one.txt',
            "C" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Three".
     *
     * @group theStonemason_three
     */
    public function testCanExecuteThree(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - three.txt',
            "2L 2R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Five".
     *
     * @group theStonemason_five
     */
    public function testCanExecuteFive(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - five.txt',
            "3L 1R 4R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Seven".
     *
     * @group theStonemason_seven
     */
    public function testCanExecuteSeven(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - seven.txt',
            "4L 4R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nine".
     *
     * @group theStonemason_nine
     */
    public function testCanExecuteNine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - nine.txt',
            "4L 1L 2R 4R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Eleven".
     *
     * @group theStonemason_eleven
     */
    public function testCanExecuteEleven(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - eleven.txt',
            "4L 2L C 2R 4R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Thirteen".
     *
     * @group theStonemason_thirteen
     */
    public function testCanExecuteThirteen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - thirteen.txt',
            "5L 1L 3R 6R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fifteen".
     *
     * @group theStonemason_fifteen
     */
    public function testCanExecuteFifteen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - fifteen.txt',
            "5L 2L C 3R 6R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hey hey".
     *
     * @group theStonemason_heyHey
     */
    public function testCanExecuteHeyHey(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - hey hey.txt',
            "7L 2L 3R 5R 8R" . PHP_EOL
        );
    }
}
