<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\StallTilt;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\StallTilt\StallTilt;

/**
 * Tests for the "Stall tilt" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\StallTilt\StallTilt
 * @group stallTilt
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new StallTilt();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group stallTilt_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Stalling".
     *
     * @group stallTilt_stalling
     */
    public function testCanExecuteStalling(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - stalling.txt',
            file_get_contents(__DIR__ . '/output/02 - stalling.txt')
        );
    }

    /**
     * Test that the code can be executed for "Real case".
     *
     * @group stallTilt_realCase
     */
    public function testCanExecuteRealCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - real case.txt',
            file_get_contents(__DIR__ . '/output/03 - real case.txt')
        );
    }

    /**
     * Test that the code can be executed for "Just a little one".
     *
     * @group stallTilt_justALittleOne
     */
    public function testCanExecuteJustALittleOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - just a little one.txt',
            file_get_contents(__DIR__ . '/output/04 - just a little one.txt')
        );
    }

    /**
     * Test that the code can be executed for "Duel".
     *
     * @group stallTilt_duel
     */
    public function testCanExecuteDuel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - duel.txt',
            file_get_contents(__DIR__ . '/output/05 - duel.txt')
        );
    }
}
