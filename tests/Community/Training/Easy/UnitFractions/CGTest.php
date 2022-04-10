<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\UnitFractions;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\UnitFractions\UnitFractions;

/**
 * Tests for the "Unit fractions" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\UnitFractions\UnitFractions
 * @group unitFractions
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new UnitFractions();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group unitFractions_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "12".
     *
     * @group unitFractions_12
     */
    public function testCanExecute12(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 12.txt',
            file_get_contents(__DIR__ . '/output/02 - 12.txt')
        );
    }

    /**
     * Test that the code can be executed for "17".
     *
     * @group unitFractions_17
     */
    public function testCanExecute17(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 17.txt',
            file_get_contents(__DIR__ . '/output/03 - 17.txt')
        );
    }

    /**
     * Test that the code can be executed for "100".
     *
     * @group unitFractions_100
     */
    public function testCanExecute100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 100.txt',
            file_get_contents(__DIR__ . '/output/04 - 100.txt')
        );
    }

    /**
     * Test that the code can be executed for "9999".
     *
     * @group unitFractions_9999
     */
    public function testCanExecute9999(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 9999.txt',
            file_get_contents(__DIR__ . '/output/05 - 9999.txt')
        );
    }

    /**
     * Test that the code can be executed for "71339".
     *
     * @group unitFractions_71339
     */
    public function testCanExecute71339(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 71339.txt',
            file_get_contents(__DIR__ . '/output/06 - 71339.txt')
        );
    }

    /**
     * Test that the code can be executed for "104027".
     *
     * @group unitFractions_104027
     */
    public function testCanExecute104027(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 104027.txt',
            file_get_contents(__DIR__ . '/output/07 - 104027.txt')
        );
    }
}
