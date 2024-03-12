<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RotatingArrows;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RotatingArrows\RotatingArrows;

/**
 * Tests for the "Rotating arrows" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RotatingArrows\RotatingArrows
 * @group rotatingArrows
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RotatingArrows();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group rotatingArrows_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More rotate".
     *
     * @group rotatingArrows_MoreRotate
     */
    public function testCanExecuteMoreRotate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more rotate.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Overflow".
     *
     * @group rotatingArrows_overflow
     */
    public function testCanExecuteOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - overflow.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Repeat".
     *
     * @group rotatingArrows_repeat
     */
    public function testCanExecuteRepeat(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - repeat.txt',
            18 . PHP_EOL
        );
    }
}
