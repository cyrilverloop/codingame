<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SumOfSpiralsDiagonals;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SumOfSpiralsDiagonals\SumOfSpiralsDiagonals;

/**
 * Tests for the "Sum of spiral's diagonals" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SumOfSpiralsDiagonals\SumOfSpiralsDiagonals
 * @group sumOfSpiralsDiagonals
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SumOfSpiralsDiagonals();
    }

    /**
     * Test that the code can be executed for "Odd spiral".
     *
     * @group sumOfSpiralsDiagonals_oddSpiral
     */
    public function testCanExecuteOddSpiral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - odd spiral.txt',
            133 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Even spiral".
     *
     * @group sumOfSpiralsDiagonals_evenSpiral
     */
    public function testCanExecuteEvenSpiral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - even spiral.txt',
            61584 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger spiral".
     *
     * @group sumOfSpiralsDiagonals_biggerSpiral
     */
    public function testCanExecuteBiggerSpiral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - bigger spiral.txt',
            270890816 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Milky spiral".
     *
     * @group sumOfSpiralsDiagonals_milkySpiral
     */
    public function testCanExecuteMilkySpiral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - milky spiral.txt',
            4086949725 . PHP_EOL
        );
    }
}
