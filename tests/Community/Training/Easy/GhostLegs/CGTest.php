<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\GhostLegs;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\GhostLegs\GhostLegs;

/**
 * Tests for the "Ghost legs" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\GhostLegs\GhostLegs
 * @group ghostLegs
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GhostLegs();
    }

    /**
     * Test that the code can be executed for "Simple sample".
     *
     * @group ghostLegs_simpleSample
     */
    public function testCanExecuteSimpleSample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple sample.txt',
            file_get_contents(__DIR__ . '/output/01 - simple sample.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small sample".
     *
     * @group ghostLegs_smallSample
     */
    public function testCanExecuteSmallSample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small sample.txt',
            file_get_contents(__DIR__ . '/output/02 - small sample.txt')
        );
    }

    /**
     * Test that the code can be executed for "6 Lanes".
     *
     * @group ghostLegs_6Lanes
     */
    public function testCanExecute6Lanes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 6 lanes.txt',
            file_get_contents(__DIR__ . '/output/03 - 6 lanes.txt')
        );
    }

    /**
     * Test that the code can be executed for "8 Lanes".
     *
     * @group ghostLegs_8Lanes
     */
    public function testCanExecute8Lanes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 8 lanes.txt',
            file_get_contents(__DIR__ . '/output/04 - 8 lanes.txt')
        );
    }

    /**
     * Test that the code can be executed for "10 Lanes".
     *
     * @group ghostLegs_10Lanes
     */
    public function testCanExecute10Lanes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 10 lanes.txt',
            file_get_contents(__DIR__ . '/output/05 - 10 lanes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wide and wild".
     *
     * @group ghostLegs_wideAndWild
     */
    public function testCanExecuteWideAndWild(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - wide and wild.txt',
            file_get_contents(__DIR__ . '/output/06 - wide and wild.txt')
        );
    }
}
