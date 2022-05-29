<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\LinearBezierCurves;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\LinearBezierCurves\LinearBezierCurves;

/**
 * Tests for the "Linear Bézier curves" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\LinearBezierCurves\LinearBezierCurves
 * @group linearBezierCurves
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new LinearBezierCurves();
    }

    /**
     * Test that the code can be executed for "Simple with low resolution".
     *
     * @group linearBezierCurves_simpleWithLowResolution
     */
    public function testCanExecuteSimpleWithLowResolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple with low resolution.txt',
            file_get_contents(__DIR__ . '/output/01 - simple with low resolution.txt')
        );
    }

    /**
     * Test that the code can be executed for "Inverted control points".
     *
     * @group linearBezierCurves_invertedControlPoints
     */
    public function testCanExecuteInvertedControlPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - inverted control points.txt',
            file_get_contents(__DIR__ . '/output/02 - inverted control points.txt')
        );
    }

    /**
     * Test that the code can be executed for "Close loop".
     *
     * @group linearBezierCurves_closeLoop
     */
    public function testCanExecuteCloseLoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - close loop.txt',
            file_get_contents(__DIR__ . '/output/03 - close loop.txt')
        );
    }

    /**
     * Test that the code can be executed for "Only extremes".
     *
     * @group linearBezierCurves_onlyExtremes
     */
    public function testCanExecuteOnlyExtremes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - only extremes.txt',
            file_get_contents(__DIR__ . '/output/04 - only extremes.txt')
        );
    }

    /**
     * Test that the code can be executed for "High resolution".
     *
     * @group linearBezierCurves_highResolution
     */
    public function testCanExecuteHighResolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - high resolution.txt',
            file_get_contents(__DIR__ . '/output/05 - high resolution.txt')
        );
    }

    /**
     * Test that the code can be executed for "High resolution 2".
     *
     * @group linearBezierCurves_highResolution2
     */
    public function testCanExecuteHighResolution2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - high resolution 2.txt',
            file_get_contents(__DIR__ . '/output/06 - high resolution 2.txt')
        );
    }
}
