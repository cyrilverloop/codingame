<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SuguruSolver;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SuguruSolver\SuguruSolver;

/**
 * Tests for the "Suguru solver" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SuguruSolver\SuguruSolver
 * @group suguruSolver
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SuguruSolver();
    }

    /**
     * Test that the code can be executed for "4x5".
     *
     * @group suguruSolver_4x5
     */
    public function testCanExecute4x5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 4x5.txt',
            file_get_contents(__DIR__ . '/output/01 - 4x5.txt')
        );
    }

    /**
     * Test that the code can be executed for "8x8".
     *
     * @group suguruSolver_8x8
     */
    public function testCanExecute8x8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 8x8.txt',
            file_get_contents(__DIR__ . '/output/02 - 8x8.txt')
        );
    }

    /**
     * Test that the code can be executed for "15x10".
     *
     * @group suguruSolver_15x10
     */
    public function testCanExecute15x10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 15x10.txt',
            file_get_contents(__DIR__ . '/output/03 - 15x10.txt')
        );
    }

    /**
     * Test that the code can be executed for "20x20".
     *
     * @group suguruSolver_20x20
     */
    public function testCanExecute20x20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 20x20.txt',
            file_get_contents(__DIR__ . '/output/04 - 20x20.txt')
        );
    }
}
