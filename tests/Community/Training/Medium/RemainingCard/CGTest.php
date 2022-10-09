<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RemainingCard;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\RemainingCard\RemainingCard;

/**
 * Tests for the "Remaining card" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RemainingCard\RemainingCard
 * @group remainingCard
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RemainingCard();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group remainingCard_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group remainingCard_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy.txt',
            14 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A little more".
     *
     * @group remainingCard_aLittleMore
     */
    public function testCanExecuteALittleMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a little more.txt',
            32 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A thick deck".
     *
     * @group remainingCard_aThickDeck
     */
    public function testCanExecuteAThickDeck(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - a thick deck.txt',
            530 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Heavy deck".
     *
     * @group remainingCard_heavyDeck
     */
    public function testCanExecuteHeavyDeck(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - heavy deck.txt',
            3368 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Getting serious".
     *
     * @group remainingCard_gettingSerious
     */
    public function testCanExecuteGettingSerious(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - getting serious.txt',
            171226 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Millions 1".
     *
     * @group remainingCard_millions1
     */
    public function testCanExecuteMillions1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - millions 1.txt',
            59004560 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Millions 2".
     *
     * @group remainingCard_millions2
     */
    public function testCanExecuteMillions2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - millions 2.txt',
            321640652 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ultimate test".
     *
     * @group remainingCard_ultimateTest
     */
    public function testCanExecuteUltimateTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - ultimate test.txt',
            926258176 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Boundary case".
     *
     * @group remainingCard_boundaryCase
     */
    public function testCanExecuteBoundaryCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - boundary case.txt',
            1 . PHP_EOL
        );
    }
}
