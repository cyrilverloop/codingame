<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NatureOfTriangles;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NatureOfTriangles\NatureOfTriangles;

/**
 * Tests for the "Nature of triangles" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NatureOfTriangles\NatureOfTriangles
 * @group natureOfTriangles
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NatureOfTriangles();
    }

    /**
     * Test that the code can be executed for "Scalene triangles".
     *
     * @group natureOfTriangles_scaleneTriangles
     */
    public function testCanExecuteScaleneTriangles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - scalene triangles.txt',
            file_get_contents(__DIR__ . '/output/01 - scalene triangles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Isosceles triangles".
     *
     * @group natureOfTriangles_isoscelesTriangles
     */
    public function testCanExecuteIsoscelesTriangles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - isosceles triangles.txt',
            file_get_contents(__DIR__ . '/output/02 - isosceles triangles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Right angled triangles".
     *
     * @group natureOfTriangles_rightAngledTriangles
     */
    public function testCanExecuteRightAngledTriangles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - right angled triangles.txt',
            file_get_contents(__DIR__ . '/output/03 - right angled triangles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Almost right".
     *
     * @group natureOfTriangles_almostRight
     */
    public function testCanExecuteAlmostRight(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - almost right.txt',
            "ABC is a scalene and an acute triangle." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Everything".
     *
     * @group natureOfTriangles_everything
     */
    public function testCanExecuteEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - everything.txt',
            file_get_contents(__DIR__ . '/output/05 - everything.txt')
        );
    }
}
