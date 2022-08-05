<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BouncingBarry;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BouncingBarry\BouncingBarry;

/**
 * Tests for the "Bouncing barry" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BouncingBarry\BouncingBarry
 * @group bouncingBarry
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BouncingBarry();
    }

    /**
     * Test that the code can be executed for "Meandering".
     *
     * @group bouncingBarry_meandering
     */
    public function testCanExecuteMeandering(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - meandering.txt',
            file_get_contents(__DIR__ . '/output/01 - meandering.txt')
        );
    }

    /**
     * Test that the code can be executed for "Exploring".
     *
     * @group bouncingBarry_exploring
     */
    public function testCanExecuteExploring(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - exploring.txt',
            file_get_contents(__DIR__ . '/output/02 - exploring.txt')
        );
    }

    /**
     * Test that the code can be executed for "Spiraling".
     *
     * @group bouncingBarry_spiraling
     */
    public function testCanExecuteSpiraling(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - spiraling.txt',
            file_get_contents(__DIR__ . '/output/03 - spiraling.txt')
        );
    }

    /**
     * Test that the code can be executed for "Crossing".
     *
     * @group bouncingBarry_crossing
     */
    public function testCanExecuteCrossing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - crossing.txt',
            file_get_contents(__DIR__ . '/output/04 - crossing.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bobbing and weaving".
     *
     * @group bouncingBarry_bobbingAndWeaving
     */
    public function testCanExecuteBobbingAndWeaving(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - bobbing and weaving.txt',
            file_get_contents(__DIR__ . '/output/05 - bobbing and weaving.txt')
        );
    }

    /**
     * Test that the code can be executed for "Tail-chasing".
     *
     * @group bouncingBarry_tailChasing
     */
    public function testCanExecuteTailChasing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - tail-chasing.txt',
            "." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sprinting".
     *
     * @group bouncingBarry_sprinting
     */
    public function testCanExecuteSprinting(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - sprinting.txt',
            file_get_contents(__DIR__ . '/output/07 - sprinting.txt')
        );
    }

    /**
     * Test that the code can be executed for "Just Drunk...     -ing".
     *
     * @group bouncingBarry_justDrunking
     */
    public function testCanExecuteJustDrunking(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - just drunk-ing.txt',
            file_get_contents(__DIR__ . '/output/08 - just drunk-ing.txt')
        );
    }
}
