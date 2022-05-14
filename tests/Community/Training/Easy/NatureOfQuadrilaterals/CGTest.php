<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NatureOfQuadrilaterals;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\NatureOfQuadrilaterals\NatureOfQuadrilaterals;

/**
 * Tests for the "Nature of quadrilaterals" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NatureOfQuadrilaterals\NatureOfQuadrilaterals
 * @group natureOfQuadrilaterals
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new NatureOfQuadrilaterals();
    }

    /**
     * Test that the code can be executed for "Quadrilateral".
     *
     * @group natureOfQuadrilaterals_quadrilateral
     */
    public function testCanExecuteQuadrilateral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - quadrilateral.txt',
            "ABCD is a quadrilateral." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parallelogram".
     *
     * @group natureOfQuadrilaterals_parallelogram
     */
    public function testCanExecuteParallelogram(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - parallelogram.txt',
            "DERP is a parallelogram." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rhombus".
     *
     * @group natureOfQuadrilaterals_rhombus
     */
    public function testCanExecuteRhombus(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - rhombus.txt',
            "ABCD is a rhombus." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rectangle".
     *
     * @group natureOfQuadrilaterals_rectangle
     */
    public function testCanExecuteRectangle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - rectangle.txt',
            "EFGH is a rectangle." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Square".
     *
     * @group natureOfQuadrilaterals_square
     */
    public function testCanExecuteSquare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - square.txt',
            "ABCD is a square." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Everything".
     *
     * @group natureOfQuadrilaterals_everything
     */
    public function testCanExecuteEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - everything.txt',
            file_get_contents(__DIR__ . '/output/06 - everything.txt')
        );
    }
}
