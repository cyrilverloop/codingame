<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DeadMensShot;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\DeadMensShot\DeadMensShot;

/**
 * Tests for the "Dead men's shot" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DeadMensShot\DeadMensShot
 * @group deadMensShot
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DeadMensShot();
    }

    /**
     * Test that the code can be executed for "Square".
     *
     * @group deadMensShot_square
     */
    public function testCanExecuteSquare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - square.txt',
            file_get_contents(__DIR__ . '/output/01 - square.txt')
        );
    }

    /**
     * Test that the code can be executed for "Triangle".
     *
     * @group deadMensShot_triangle
     */
    public function testCanExecuteTriangle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - triangle.txt',
            file_get_contents(__DIR__ . '/output/02 - triangle.txt')
        );
    }

    /**
     * Test that the code can be executed for "Five corners".
     *
     * @group deadMensShot_fiveCorners
     */
    public function testCanExecuteFiveCorners(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - five corners.txt',
            file_get_contents(__DIR__ . '/output/03 - five corners.txt')
        );
    }

    /**
     * Test that the code can be executed for "Six sides".
     *
     * @group deadMensShot_sixSides
     */
    public function testCanExecuteSixSides(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - six sides.txt',
            file_get_contents(__DIR__ . '/output/04 - six sides.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ten sides".
     *
     * @group deadMensShot_tenSides
     */
    public function testCanExecuteTenSides(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - ten sides.txt',
            file_get_contents(__DIR__ . '/output/05 - ten sides.txt')
        );
    }
}
