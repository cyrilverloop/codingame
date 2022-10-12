<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CountingSquaresOnPegs;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\CountingSquaresOnPegs\CountingSquaresOnPegs;

/**
 * Tests for the "Counting squares on pegs" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CountingSquaresOnPegs\CountingSquaresOnPegs
 * @group countingSquaresOnPegs
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CountingSquaresOnPegs();
    }

    /**
     * Test that the code can be executed for "5 points".
     *
     * @group countingSquaresOnPegs_5Points
     */
    public function testCanExecute5Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 5 points.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "50 points".
     *
     * @group countingSquaresOnPegs_50Points
     */
    public function testCanExecute50Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 50 points.txt',
            46 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "100 points".
     *
     * @group countingSquaresOnPegs_100Points
     */
    public function testCanExecute100Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 100 points.txt',
            198 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "500 points".
     *
     * @group countingSquaresOnPegs_500Points
     */
    public function testCanExecute500Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 500 points.txt',
            6114 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1000 points".
     *
     * @group countingSquaresOnPegs_1000Points
     */
    public function testCanExecute1000Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 1000 points.txt',
            21893 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1500 points".
     *
     * @group countingSquaresOnPegs_1500Points
     */
    public function testCanExecute1500Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 1500 points.txt',
            49330 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1750 points".
     *
     * @group countingSquaresOnPegs_1750Points
     */
    public function testCanExecute1750Points(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 1750 points.txt',
            63502 . PHP_EOL
        );
    }
}
