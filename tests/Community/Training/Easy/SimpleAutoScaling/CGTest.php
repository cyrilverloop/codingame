<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SimpleAutoScaling;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SimpleAutoScaling\SimpleAutoScaling;

/**
 * Tests for the "Simple auto-scaling" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SimpleAutoScaling\SimpleAutoScaling
 * @group simpleAutoScaling
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SimpleAutoScaling();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group simpleAutoScaling_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Slow start".
     *
     * @group simpleAutoScaling_slowStart
     */
    public function testCanExecuteSlowStart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - slow start.txt',
            file_get_contents(__DIR__ . '/output/02 - slow start.txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium".
     *
     * @group simpleAutoScaling_medium
     */
    public function testCanExecuteMedium(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium.txt',
            file_get_contents(__DIR__ . '/output/03 - medium.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lot of services".
     *
     * @group simpleAutoScaling_lotOfServices
     */
    public function testCanExecuteLotOfServices(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - lot of services.txt',
            file_get_contents(__DIR__ . '/output/04 - lot of services.txt')
        );
    }

    /**
     * Test that the code can be executed for "One service".
     *
     * @group simpleAutoScaling_oneService
     */
    public function testCanExecuteOneService(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - one service.txt',
            file_get_contents(__DIR__ . '/output/05 - one service.txt')
        );
    }
}
