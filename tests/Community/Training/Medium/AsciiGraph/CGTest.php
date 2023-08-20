<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\AsciiGraph;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\AsciiGraph\AsciiGraph;

/**
 * Tests for the "Ascii graph" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\AsciiGraph\AsciiGraph
 * @group asciiGraph
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AsciiGraph();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bouncingBarry_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "No points".
     *
     * @group bouncingBarry_noPoints
     */
    public function testCanExecuteNoPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no points.txt',
            file_get_contents(__DIR__ . '/output/02 - no points.txt')
        );
    }

    /**
     * Test that the code can be executed for "Negative values".
     *
     * @group bouncingBarry_negativeValues
     */
    public function testCanExecuteNegativeValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - negative values.txt',
            file_get_contents(__DIR__ . '/output/03 - negative values.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two points".
     *
     * @group bouncingBarry_twoPoints
     */
    public function testCanExecuteTwoPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two points.txt',
            file_get_contents(__DIR__ . '/output/04 - two points.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many points".
     *
     * @group bouncingBarry_manyPoints
     */
    public function testCanExecuteManyPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - many points.txt',
            file_get_contents(__DIR__ . '/output/05 - many points.txt')
        );
    }

    /**
     * Test that the code can be executed for "Point at origin".
     *
     * @group bouncingBarry_pointAtOrigin
     */
    public function testCanExecutePointAtOrigin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - point at origin.txt',
            file_get_contents(__DIR__ . '/output/06 - point at origin.txt')
        );
    }
}
