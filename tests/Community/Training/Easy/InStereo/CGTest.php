<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\InStereo;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\InStereo\InStereo;

/**
 * Tests for the "In stereo" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\InStereo\InStereo
 * @group inStereo
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new InStereo();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group inStereo_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lattice".
     *
     * @group inStereo_lattice
     */
    public function testCanExecuteLattice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - lattice.txt',
            file_get_contents(__DIR__ . '/output/02 - lattice.txt')
        );
    }

    /**
     * Test that the code can be executed for "Diamond".
     *
     * @group inStereo_diamond
     */
    public function testCanExecuteDiamond(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - diamond.txt',
            file_get_contents(__DIR__ . '/output/03 - diamond.txt')
        );
    }

    /**
     * Test that the code can be executed for "ViewFullscreen".
     *
     * @group inStereo_viewFullscreen
     */
    public function testCanExecuteViewFullscreen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - viewFullscreen.txt',
            file_get_contents(__DIR__ . '/output/04 - viewFullscreen.txt')
        );
    }
}
