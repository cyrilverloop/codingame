<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HexagonalMazePart2;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\HexagonalMazePart2\HexagonalMazePart2;

/**
 * Tests for the "Hexagonal maze - part2" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HexagonalMazePart2\HexagonalMazePart2
 * @group hexagonalMazePart2
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HexagonalMazePart2();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group hexagonalMazePart2_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "R R DR R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Need the key".
     *
     * @group hexagonalMazePart2_needTheKey
     */
    public function testCanExecuteNeedTheKey(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - need the key.txt',
            "R DR DR DL DL DL UR UR R DR DR DR DR R R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Choose shortest".
     *
     * @group hexagonalMazePart2_chooseShortest
     */
    public function testCanExecuteChooseShortest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - choose shortest.txt',
            "R DR DR DL DL DL UR UR R DR DR DR DR R R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shortest with sliding".
     *
     * @group hexagonalMazePart2_shortestWithSliding
     */
    public function testCanExecuteShortestWithSliding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - shortest with sliding.txt',
            "DL DR R UR UL" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sliding junction".
     *
     * @group hexagonalMazePart2_slidingJunction
     */
    public function testCanExecuteSlidingJunction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - sliding junction.txt',
            "R DR DR DR R R UR UL L L L DL DL DR R R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sliding until wall".
     *
     * @group hexagonalMazePart2_slidingUntilWall
     */
    public function testCanExecuteSlidingUntilWall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - sliding until wall.txt',
            "DR DR R UR UL L L L DL DR DR R R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sliding or not sliding, that is the junction".
     *
     * @group hexagonalMazePart2_slidingOrNotSlidingThatIsTheJunction
     */
    public function testCanExecuteSlidingOrNotSlidingThatIsTheJunction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - sliding or not sliding, that is the junction.txt',
            "DR R L L" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Crazy doors".
     *
     * @group hexagonalMazePart2_crazyDoors
     */
    public function testCanExecuteCrazyDoors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - crazy doors.txt',
            "DR R L L L" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Visited or not ?".
     *
     * @group hexagonalMazePart2_visitedOrNot
     */
    public function testCanExecuteVisitedOrNot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - visited or not ?.txt',
            "DR R UR UL L UR" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Skating rink".
     *
     * @group hexagonalMazePart2_skatingRink
     */
    public function testCanExecuteSkatingRink(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - skating rink.txt',
            "DR L UL R UR UL DL" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Skating rink with keys".
     *
     * @group hexagonalMazePart2_skatingRinkWithKeys
     */
    public function testCanExecuteSkatingRinkWithKeys(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - skating rink with keys.txt',
            "UL R L DR UR UL UL UR DR L DL DL UR R DR DL" . PHP_EOL
        );
    }
}
