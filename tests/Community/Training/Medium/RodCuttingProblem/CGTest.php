<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RodCuttingProblem;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RodCuttingProblem\RodCuttingProblem;

/**
 * Tests for the "Rod cutting problem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RodCuttingProblem\RodCuttingProblem
 * @group rodCuttingProblem
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RodCuttingProblem();
    }

    /**
     * Test that the code can be executed for "Example test".
     *
     * @group rodCuttingProblem_exampleTest
     */
    public function testCanExecuteExampleTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example test.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same pieces but longer rod".
     *
     * @group rodCuttingProblem_samePiecesButLongerRod
     */
    public function testCanExecuteSamePiecesButLongerRod(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - same pieces but longer rod.txt',
            32 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More pieces".
     *
     * @group rodCuttingProblem_morePieces
     */
    public function testCanExecuteMorePieces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more pieces.txt',
            42 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big pieces".
     *
     * @group rodCuttingProblem_bigPieces
     */
    public function testCanExecuteBigPieces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big pieces.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many pieces".
     *
     * @group rodCuttingProblem_manyPieces
     */
    public function testCanExecuteManyPieces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - many pieces.txt',
            1152 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Huge rod".
     *
     * @group rodCuttingProblem_hugeRod
     */
    public function testCanExecuteHugePieces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - huge rod.txt',
            11538 . PHP_EOL
        );
    }
}
