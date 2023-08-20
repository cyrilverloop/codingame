<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BitCountToLimit;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BitCountToLimit\BitCountToLimit;

/**
 * Tests for the "Bit count to limit" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BitCountToLimit\BitCountToLimit
 * @group bitCountToLimit
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BitCountToLimit();
    }

    /**
     * Test that the code can be executed for "Simple one".
     *
     * @group bitCountToLimit_simpleOne
     */
    public function testCanExecuteSimpleOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple one.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A bit more".
     *
     * @group bitCountToLimit_aBitMore
     */
    public function testCanExecuteABitMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - a bit more.txt',
            81 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "And > 100 ?".
     *
     * @group bitCountToLimit_andGreaterThan100
     */
    public function testCanExecuteAndGreaterThan100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - and > 100 ?.txt',
            408 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Million ?".
     *
     * @group bitCountToLimit_million
     */
    public function testCanExecuteMillion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - million ?.txt',
            10485761 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Did you get the trick ?".
     *
     * @group bitCountToLimit_didYouGetTheTrick
     */
    public function testCanExecuteDidYouGetTheTrick(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - did you get the trick ?.txt',
            1811939329 . PHP_EOL
        );
    }
}
