<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheTravellingSalesmanProblem;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TheTravellingSalesmanProblem\TheTravellingSalesmanProblem;

/**
 * Tests for the "The travelling salesman problem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheTravellingSalesmanProblem\TheTravellingSalesmanProblem
 * @group theTravellingSalesmanProblem
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheTravellingSalesmanProblem();
    }

    /**
     * Test that the code can be executed for "5 Cities".
     *
     * @group theTravellingSalesmanProblem_5Cities
     */
    public function testCanExecute5Cities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 5 cities.txt',
            71 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "12 Cities".
     *
     * @group theTravellingSalesmanProblem_12Cities
     */
    public function testCanExecute12Cities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 12 cities.txt',
            403 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "14 Cities".
     *
     * @group theTravellingSalesmanProblem_14Cities
     */
    public function testCanExecute14Cities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 14 cities.txt',
            327 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "10 Cities".
     *
     * @group theTravellingSalesmanProblem_10Cities
     */
    public function testCanExecute10Cities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 10 cities.txt',
            252 . PHP_EOL
        );
    }
}
