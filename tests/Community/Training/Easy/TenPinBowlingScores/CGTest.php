<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TenPinBowlingScores;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\TenPinBowlingScores\TenPinBowlingScores;

/**
 * Tests for the "10 pin bowling scores" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TenPinBowlingScores\TenPinBowlingScores
 * @group 10PinBowlingScores
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TenPinBowlingScores();
    }

    /**
     * Test that the code can be executed for "No strikes no spares".
     *
     * @group 10PinBowlingScores_noStrikesNoSpares
     */
    public function testCanExecuteNoStrikesNoSpares(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - no strikes no spares.txt',
            "5 13 18 26 31 32 34 40 47 54" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Spares".
     *
     * @group 10PinBowlingScores_spares
     */
    public function testCanExecuteSpares(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - spares.txt',
            file_get_contents(__DIR__ . '/output/02 - spares.txt')
        );
    }

    /**
     * Test that the code can be executed for "Strikes".
     *
     * @group 10PinBowlingScores_strikes
     */
    public function testCanExecuteStrikes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - strikes.txt',
            file_get_contents(__DIR__ . '/output/03 - strikes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Strikes and spares".
     *
     * @group 10PinBowlingScores_strikesAndSpares
     */
    public function testCanExecuteStrikesAndSpares(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - strikes and spares.txt',
            file_get_contents(__DIR__ . '/output/04 - strikes and spares.txt')
        );
    }
}
