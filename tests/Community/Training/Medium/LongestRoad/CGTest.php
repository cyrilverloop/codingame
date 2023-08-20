<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LongestRoad;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LongestRoad\LongestRoad;

/**
 * Tests for the "Longest road" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LongestRoad\LongestRoad
 * @group longestRoad
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LongestRoad();
    }

    /**
     * Test that the code can be executed for "One player, only roads".
     *
     * @group longestRoad_onePlayerOnlyRoads
     */
    public function testCanExecuteOnePlayerOnlyRoads(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one player, only roads.txt',
            "A 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One player".
     *
     * @group longestRoad_onePlayer
     */
    public function testCanExecuteOnePlayer(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one player.txt',
            "A 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not long enough".
     *
     * @group longestRoad_notLongEnough
     */
    public function testCanExecuteNotLongEnough(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - not long enough.txt',
            "0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two players".
     *
     * @group longestRoad_twoPlayers
     */
    public function testCanExecuteTwoPlayers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two players.txt',
            "B 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Four players and overlapping roads".
     *
     * @group longestRoad_fourPlayersAndOverlappingRoads
     */
    public function testCanExecuteFourPlayersAndOverlappingRoads(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - four players and overlapping roads.txt',
            "C 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Loops and branches".
     *
     * @group longestRoad_loopsAndBranches
     */
    public function testCanExecuteLoopsAndBranches(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - loops and branches.txt',
            "A 13" . PHP_EOL
        );
    }
}
