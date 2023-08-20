<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TwoThousandFortyEightScores;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TwoThousandFortyEightScores\TwoThousandFortyEightScores;

/**
 * Tests for the "2048 scores" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TwoThousandFortyEightScores\TwoThousandFortyEightScores
 * @group twoThousandFortyEightScores
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TwoThousandFortyEightScores();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group twoThousandFortyEightScores_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small game".
     *
     * @group twoThousandFortyEightScores_smallGame
     */
    public function testCanExecuteSmallGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small game.txt',
            file_get_contents(__DIR__ . '/output/02 - small game.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long game".
     *
     * @group twoThousandFortyEightScores_longGame
     */
    public function testCanExecuteLongGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - long game.txt',
            file_get_contents(__DIR__ . '/output/03 - long game.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big numbers".
     *
     * @group twoThousandFortyEightScores_bigNumbers
     */
    public function testCanExecuteBigNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big numbers.txt',
            file_get_contents(__DIR__ . '/output/04 - big numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "Game over".
     *
     * @group twoThousandFortyEightScores_gameOver
     */
    public function testCanExecuteGameOver(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - game over.txt',
            file_get_contents(__DIR__ . '/output/05 - game over.txt')
        );
    }

    /**
     * Test that the code can be executed for "Beyond 2048".
     *
     * @group twoThousandFortyEightScores_beyond2048
     */
    public function testCanExecuteBeyond2048(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - beyond 2048.txt',
            file_get_contents(__DIR__ . '/output/06 - beyond 2048.txt')
        );
    }

    /**
     * Test that the code can be executed for "No Hard Coding!".
     *
     * @group twoThousandFortyEightScores_noHardCoding
     */
    public function testCanExecuteNoHardCoding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - no hard coding!.txt',
            file_get_contents(__DIR__ . '/output/07 - no hard coding!.txt')
        );
    }
}
