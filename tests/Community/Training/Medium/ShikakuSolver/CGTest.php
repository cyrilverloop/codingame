<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ShikakuSolver;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ShikakuSolver\ShikakuSolver;

/**
 * Tests for the "Shikaku solver" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ShikakuSolver\ShikakuSolver
 * @group shikakuSolver
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ShikakuSolver();
    }

    /**
     * Test that the code can be executed for "10x10, one solution".
     *
     * @group shikakuSolver_10By10OneSolution
     */
    public function testCanExecute10By10OneSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 10x10, one solution.txt',
            file_get_contents(__DIR__ . '/output/01 - 10x10, one solution.txt')
        );
    }

    /**
     * Test that the code can be executed for "15x20, more solutions".
     *
     * @group shikakuSolver_15By20MoreSolutions
     */
    public function testCanExecute15By20MoreSolutions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 15x20, more solutions.txt',
            file_get_contents(__DIR__ . '/output/02 - 15x20, more solutions.txt')
        );
    }

    /**
     * Test that the code can be executed for "20x20".
     *
     * @group shikakuSolver_20By20
     */
    public function testCanExecute20By20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 20x20.txt',
            file_get_contents(__DIR__ . '/output/03 - 20x20.txt')
        );
    }

    /**
     * Test that the code can be executed for "25x20".
     *
     * @group shikakuSolver_25By20
     */
    public function testCanExecute25By20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 25x20.txt',
            file_get_contents(__DIR__ . '/output/04 - 25x20.txt')
        );
    }

    /**
     * Test that the code can be executed for "30x30".
     *
     * @group shikakuSolver_30By30
     */
    public function testCanExecute30By30(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 30x30.txt',
            file_get_contents(__DIR__ . '/output/05 - 30x30.txt')
        );
    }
}
