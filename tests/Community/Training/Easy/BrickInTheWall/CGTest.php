<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BrickInTheWall;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BrickInTheWall\BrickInTheWall;

/**
 * Tests for the "Brick in the wall" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BrickInTheWall\BrickInTheWall
 * @group brickInTheWall
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BrickInTheWall();
    }

    /**
     * Test that the code can be executed for "Three bricks".
     *
     * @group brickInTheWall_threeBricks
     */
    public function testCanExecuteThreeBricks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - three bricks.txt',
            "6.500" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "42 bricks in the wall".
     *
     * @group brickInTheWall_42BricksInTheWall
     */
    public function testCanExecute42BricksInTheWall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 42 bricks in the wall.txt',
            "436.150" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fibonacci bricks (+1)".
     *
     * @group brickInTheWall_fibonacciBricks
     */
    public function testCanExecuteFibonacciBricks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - fibonacci bricks (+1).txt',
            "541.450" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Odd, even".
     *
     * @group brickInTheWall_oddEven
     */
    public function testCanExecuteOddEven(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - odd, even.txt',
            "273.000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I can see over it I".
     *
     * @group brickInTheWall_iCanSeeOverItI
     */
    public function testCanExecuteICanSeeOverItI(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - i can see over it I.txt',
            "0.000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I can see over it II".
     *
     * @group brickInTheWall_iCanSeeOverItII
     */
    public function testCanExecuteICanSeeOverItII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - i can see over it II.txt',
            "0.650" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 12589".
     *
     * @group brickInTheWall_test12589
     */
    public function testCanExecuteTest12589(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 12589.txt',
            "4354.350" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tall".
     *
     * @group brickInTheWall_tall
     */
    public function testCanExecuteTall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - tall.txt',
            "7401.550" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A real wall".
     *
     * @group brickInTheWall_aRealWall
     */
    public function testCanExecuteARealWall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - a real wall.txt',
            "233041.250" . PHP_EOL
        );
    }
}
