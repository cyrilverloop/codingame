<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LunarLockout;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LunarLockout\LunarLockout;

/**
 * Tests for the "Lunar lockout" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LunarLockout\LunarLockout
 * @group lunarLockout
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LunarLockout();
    }

    /**
     * Test that the code can be executed for "One move".
     *
     * @group lunarLockout_oneMove
     */
    public function testCanExecuteOneMove(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one move.txt',
            file_get_contents(__DIR__ . '/output/01 - one move.txt')
        );
    }

    /**
     * Test that the code can be executed for "A little more movement".
     *
     * @group lunarLockout_aLittleMoreMovement
     */
    public function testCanExecuteALittleMoreMovement(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - a little more movement.txt',
            file_get_contents(__DIR__ . '/output/02 - a little more movement.txt')
        );
    }

    /**
     * Test that the code can be executed for "A few more moves".
     *
     * @group lunarLockout_aFewMoreMoves
     */
    public function testCanExecuteAFewMoreMoves(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a few more moves.txt',
            file_get_contents(__DIR__ . '/output/03 - a few more moves.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many more movements".
     *
     * @group lunarLockout_manyMoreMovements
     */
    public function testCanExecuteManyMoreMovements(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - many more movements.txt',
            file_get_contents(__DIR__ . '/output/04 - many more movements.txt')
        );
    }

    /**
     * Test that the code can be executed for "The maximum of movements".
     *
     * @group lunarLockout_theMaximumOfMovements
     */
    public function testCanExecuteTheMaximumOfMovements(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - the maximum of movements.txt',
            file_get_contents(__DIR__ . '/output/05 - the maximum of movements.txt')
        );
    }
}
