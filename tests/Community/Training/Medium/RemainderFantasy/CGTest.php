<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RemainderFantasy;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RemainderFantasy\RemainderFantasy;

/**
 * Tests for the "Remainder fantasy" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RemainderFantasy\RemainderFantasy
 * @group remainderFantasy
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RemainderFantasy();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group remainingCard_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            23 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Warm up".
     *
     * @group remainingCard_warmUp
     */
    public function testCanExecuteWarmUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - warm up.txt',
            1731 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Harder".
     *
     * @group remainingCard_harder
     */
    public function testCanExecuteHarder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - harder.txt',
            353594 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Get serious".
     *
     * @group remainingCard_getSerious
     */
    public function testCanExecuteGetSerious(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - get serious.txt',
            199022964 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Brute-force not work".
     *
     * @group remainingCard_bruteForceNotWork
     */
    public function testCanExecuteBruteForceNotWork(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - brute-force not work.txt',
            1699580108 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many Conditions".
     *
     * @group remainingCard_manyConditions
     */
    public function testCanExecuteManyConditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - many conditions.txt',
            1780880663 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A few big conditions".
     *
     * @group remainingCard_aFewBigConditions
     */
    public function testCanExecuteAFewBigConditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - a few big conditions.txt',
            2097947989 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tricky small".
     *
     * @group remainingCard_trickySmall
     */
    public function testCanExecuteTrickySmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - tricky small.txt',
            241 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nasty big".
     *
     * @group remainingCard_nastyBig
     */
    public function testCanExecuteNastyBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - nasty big.txt',
            1024360583 . PHP_EOL
        );
    }
}
