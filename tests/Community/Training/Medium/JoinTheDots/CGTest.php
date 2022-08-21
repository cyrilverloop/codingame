<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\JoinTheDots;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\JoinTheDots\JoinTheDots;

/**
 * Tests for the "Join the dots" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\JoinTheDots\JoinTheDots
 * @group joinTheDots
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new JoinTheDots();
    }

    /**
     * Test that the code can be executed for "Square of 4".
     *
     * @group joinTheDots_squareOf4
     */
    public function testCanExecuteSquareOf4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - square of 4.txt',
            file_get_contents(__DIR__ . '/output/01 - square of 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Zig-zag".
     *
     * @group joinTheDots_zigZag
     */
    public function testCanExecuteZigZag(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - zig-zag.txt',
            file_get_contents(__DIR__ . '/output/02 - zig-zag.txt')
        );
    }

    /**
     * Test that the code can be executed for "X marks the spot".
     *
     * @group joinTheDots_xMarksTheSpot
     */
    public function testCanExecuteXMarksTheSpot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - x marks the spot.txt',
            file_get_contents(__DIR__ . '/output/03 - x marks the spot.txt')
        );
    }

    /**
     * Test that the code can be executed for "Plus one".
     *
     * @group joinTheDots_plusOne
     */
    public function testCanExecutePlusOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - plus one.txt',
            file_get_contents(__DIR__ . '/output/04 - plus one.txt')
        );
    }

    /**
     * Test that the code can be executed for "Inspire".
     *
     * @group joinTheDots_inspire
     */
    public function testCanExecuteInspire(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - inspire.txt',
            file_get_contents(__DIR__ . '/output/05 - inspire.txt')
        );
    }

    /**
     * Test that the code can be executed for "Unicorn-ish".
     *
     * @group joinTheDots_unicornish
     */
    public function testCanExecuteUnicornish(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - unicorn-ish.txt',
            file_get_contents(__DIR__ . '/output/06 - unicorn-ish.txt')
        );
    }

    /**
     * Test that the code can be executed for "Butterfly".
     *
     * @group joinTheDots_butterfly
     */
    public function testCanExecuteButterfly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - butterfly.txt',
            file_get_contents(__DIR__ . '/output/07 - butterfly.txt')
        );
    }
}
