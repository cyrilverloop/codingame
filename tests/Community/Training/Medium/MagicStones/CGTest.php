<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MagicStones;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\MagicStones\MagicStones;

/**
 * Tests for the "Magic stones" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MagicStones\MagicStones
 * @group magicStones
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MagicStones();
    }

    /**
     * Test that the code can be executed for "Axiom".
     *
     * @group magicStones_axiom
     */
    public function testCanExecuteAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - axiom.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Add me up".
     *
     * @group magicStones_addMeUp
     */
    public function testCanExecuteAddMeUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - add me up.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too far".
     *
     * @group magicStones_tooFar
     */
    public function testCanExecuteTooFar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - too far.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Odd".
     *
     * @group magicStones_odd
     */
    public function testCanExecuteOdd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - odd.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Powerless".
     *
     * @group magicStones_powerless
     */
    public function testCanExecutePowerless(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - powerless.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex".
     *
     * @group magicStones_complex
     */
    public function testCanExecuteComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - complex.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Huge".
     *
     * @group magicStones_huge
     */
    public function testCanExecuteHuge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - huge.txt',
            12 . PHP_EOL
        );
    }
}
