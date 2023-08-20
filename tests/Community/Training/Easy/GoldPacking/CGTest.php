<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\GoldPacking;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\GoldPacking\GoldPacking;

/**
 * Tests for the "Gold packing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\GoldPacking\GoldPacking
 * @group goldPacking
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GoldPacking();
    }

    /**
     * Test that the code can be executed for "Perfect fit".
     *
     * @group goldPacking_perfectFit
     */
    public function testCanExecutePerfectFit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - perfect fit.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Odd lengths".
     *
     * @group goldPacking_oddLengths
     */
    public function testCanExecuteOddLengths(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - odd lengths.txt',
            "1 5 7 9 11 13" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Prime gold".
     *
     * @group goldPacking_primeGold
     */
    public function testCanExecutePrimeGold(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - prime gold.txt',
            "5 7 13 17 19 23 29" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Triangular numbers".
     *
     * @group goldPacking_triangularNumbers
     */
    public function testCanExecuteTriangularNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - triangular numbers.txt',
            "3 6 10 21 28 45 55 66 78 91 105 120 136 153 171 190 210" . PHP_EOL
        );
    }
}
