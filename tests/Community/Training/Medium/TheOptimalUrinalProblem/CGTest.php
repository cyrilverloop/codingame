<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheOptimalUrinalProblem;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TheOptimalUrinalProblem\TheOptimalUrinalProblem;

/**
 * Tests for the "The optimal urinal problem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheOptimalUrinalProblem\TheOptimalUrinalProblem
 * @group theOptimalUrinalProblem
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheOptimalUrinalProblem();
    }

    /**
     * Test that the code can be executed for "Tiny toilet".
     *
     * @group theOptimalUrinalProblem_tinyToilet
     */
    public function testCanExecuteTinyToilet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tiny toilet.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small toilet".
     *
     * @group theOptimalUrinalProblem_smallToilet
     */
    public function testCanExecuteSmallToilet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small toilet.txt',
            "3 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium-sized toilet".
     *
     * @group theOptimalUrinalProblem_mediumSizedToilet
     */
    public function testCanExecuteMediumSizedToilet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium-sized toilet.txt',
            "7 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "It's not always the first".
     *
     * @group theOptimalUrinalProblem_itsNotAlwaystheFirst
     */
    public function testCanExecuteItsNotAlwaystheFirst(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - It is not always the first.txt',
            "4 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Huge toilet".
     *
     * @group theOptimalUrinalProblem_hugeToilet
     */
    public function testCanExecuteHugeToilet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - huge toilet.txt',
            "516 8" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Toilet island".
     *
     * @group theOptimalUrinalProblem_toiletIsland
     */
    public function testCanExecuteToiletIsland(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - toilet island.txt',
            "10241 4097" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Toilet world".
     *
     * @group theOptimalUrinalProblem_toiletWorld
     */
    public function testCanExecuteToiletWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - toilet world.txt',
            "64711 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Toilet universe".
     *
     * @group theOptimalUrinalProblem_toiletUniverse
     */
    public function testCanExecuteToiletUniverse(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - toilet universe.txt',
            "655361 262145" . PHP_EOL
        );
    }
}
