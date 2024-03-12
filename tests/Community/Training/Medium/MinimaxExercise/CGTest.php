<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MinimaxExercise;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\MinimaxExercise\MinimaxExercise;

/**
 * Tests for the "Minimax exercise" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MinimaxExercise\MinimaxExercise
 * @group minimaxExercise
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MinimaxExercise();
    }

    /**
     * Test that the code can be executed for "Depth 1 game".
     *
     * @group minimaxExercise_depth1Game
     */
    public function testCanExecuteDepth1Game(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - depth 1 game.txt',
            "3 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Depth 2, no cutoffs".
     *
     * @group minimaxExercise_depth2NoCutoffs
     */
    public function testCanExecuteDepth2NoCutoffs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - depth 2, no cutoffs.txt',
            "3 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Depth 2, cutoffs".
     *
     * @group minimaxExercise_depth2Cutoffs
     */
    public function testCanExecuteDepth2Cutoffs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - depth 2, cutoffs.txt',
            "1 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small game".
     *
     * @group minimaxExercise_smallGame
     */
    public function testCanExecuteSmallGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - small game.txt',
            "0 11" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Slightly deeper game".
     *
     * @group minimaxExercise_slightlyDeeperGame
     */
    public function testCanExecuteSlightlyDeeperGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - slightly deeper game.txt',
            "-170 37" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random game, deep but narrow".
     *
     * @group minimaxExercise_randomGameDeepButNarrow
     */
    public function testCanExecuteRandomGameDeepButNarrow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - random game, deep but narrow.txt',
            "59 1510" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another large random game".
     *
     * @group minimaxExercise_anotherLargeRandomGame
     */
    public function testCanExecuteAnotherLargeRandomGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - another large random game.txt',
            "78 1119" . PHP_EOL
        );
    }
}
