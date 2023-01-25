<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TwoByTwoByTwoRubiksCubeMovements;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TwoByTwoByTwoRubiksCubeMovements\TwoByTwoByTwoRubiksCubeMovements;

/**
 * Tests for the "2×2×2 rubik’s cube movements" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TwoByTwoByTwoRubiksCubeMovements\TwoByTwoByTwoRubiksCubeMovements
 * @group twoByTwoByTwoRubiksCubeMovements
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TwoByTwoByTwoRubiksCubeMovements();
    }

    /**
     * Test that the code can be executed for "Simple move".
     *
     * @group twoByTwoByTwoRubiksCubeMovements_simpleMove
     */
    public function testCanExecuteSimpleMove(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple move.txt',
            file_get_contents(__DIR__ . '/output/01 - simple move.txt')
        );
    }

    /**
     * Test that the code can be executed for "Reverse move".
     *
     * @group twoByTwoByTwoRubiksCubeMovements_reverseMove
     */
    public function testCanExecuteReverseMove(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - reverse move.txt',
            file_get_contents(__DIR__ . '/output/02 - reverse move.txt')
        );
    }

    /**
     * Test that the code can be executed for "Square move".
     *
     * @group twoByTwoByTwoRubiksCubeMovements_squareMove
     */
    public function testCanExecuteSquareMove(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - square move.txt',
            file_get_contents(__DIR__ . '/output/03 - square move.txt')
        );
    }

    /**
     * Test that the code can be executed for "Classical algorithms".
     *
     * @group twoByTwoByTwoRubiksCubeMovements_classicalAlgorithms
     */
    public function testCanExecuteClassicalAlgorithms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - classical algorithms.txt',
            file_get_contents(__DIR__ . '/output/04 - classical algorithms.txt')
        );
    }
}
