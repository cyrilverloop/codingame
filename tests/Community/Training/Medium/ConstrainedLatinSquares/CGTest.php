<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ConstrainedLatinSquares;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\ConstrainedLatinSquares\ConstrainedLatinSquares;

/**
 * Tests for the "Constrained latin squares" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ConstrainedLatinSquares\ConstrainedLatinSquares
 * @group constrainedLatinSquares
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ConstrainedLatinSquares();
    }

    /**
     * Test that the code can be executed for "3x3 easy".
     *
     * @group depotOrganization_3x3Easy
     */
    public function testCanExecute3x3Easy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 3x3 easy.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4x4 unconstrained".
     *
     * @group depotOrganization_4x4Unconstrained
     */
    public function testCanExecute4x4Unconstrained(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 4x4 unconstrained.txt',
            576 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5x5 wrong grid".
     *
     * @group depotOrganization_5x5WrongGrid
     */
    public function testCanExecute5x5WrongGrid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 5x5 wrong grid.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5x5 fundamental".
     *
     * @group depotOrganization_5x5Fundamental
     */
    public function testCanExecute5x5Fundamental(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 5x5 fundamental.txt',
            56 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "6x6".
     *
     * @group depotOrganization_6x6
     */
    public function testCanExecute6x6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 6x6.txt',
            10752 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "7x7".
     *
     * @group depotOrganization_7x7
     */
    public function testCanExecute7x7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 7x7.txt',
            14388 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "8x8".
     *
     * @group depotOrganization_8x8
     */
    public function testCanExecute8x8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 8x8.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "9x9".
     *
     * @group depotOrganization_9x9
     */
    public function testCanExecute9x9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 9x9.txt',
            8896 . PHP_EOL
        );
    }
}
