<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LangtonsAnt;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LangtonsAnt\LangtonsAnt;

/**
 * Tests for the "Langton's ant" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LangtonsAnt\LangtonsAnt
 * @group langtonsAnt
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LangtonsAnt();
    }

    /**
     * Test that the code can be executed for "Small uniform grid, few turns".
     *
     * @group langtonsAnt_smallUniformGridFewTurns
     */
    public function testCanExecuteSmallUniformGridFewTurns(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small uniform grid, few turns.txt',
            file_get_contents(__DIR__ . '/output/01 - small uniform grid, few turns.txt')
        );
    }

    /**
     * Test that the code can be executed for "Uniform grid, lots of turns".
     *
     * @group langtonsAnt_uniformGridLotsOfTurns
     */
    public function testCanExecuteUniformGridLotsOfTurns(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - uniform grid, lots of turns.txt',
            file_get_contents(__DIR__ . '/output/02 - uniform grid, lots of turns.txt')
        );
    }

    /**
     * Test that the code can be executed for "Random grid, huge number of turns".
     *
     * @group langtonsAnt_randomGridHugeNumberOfTurns
     */
    public function testCanExecuteRandomGridHugeNumberOfTurns(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - random grid, huge number of turns.txt',
            file_get_contents(__DIR__ . '/output/03 - random grid, huge number of turns.txt')
        );
    }

    /**
     * Test that the code can be executed for "Checkerboard".
     *
     * @group langtonsAnt_checkerboard
     */
    public function testCanExecuteCheckerboard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - checkerboard.txt',
            file_get_contents(__DIR__ . '/output/04 - checkerboard.txt')
        );
    }

    /**
     * Test that the code can be executed for "Attractor".
     *
     * @group langtonsAnt_attractor
     */
    public function testCanExecuteAttractor(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - attractor.txt',
            file_get_contents(__DIR__ . '/output/05 - attractor.txt')
        );
    }
}
