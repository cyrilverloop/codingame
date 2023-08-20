<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Gravity;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Gravity\Gravity;

/**
 * Tests for the "Gravity" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Gravity\Gravity
 * @group gravity
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Gravity();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group gravity_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "One fall".
     *
     * @group gravity_oneFall
     */
    public function testCanExecuteOneFall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one fall.txt',
            file_get_contents(__DIR__ . '/output/02 - one fall.txt')
        );
    }

    /**
     * Test that the code can be executed for "Single".
     *
     * @group gravity_single
     */
    public function testCanExecuteSingle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - single.txt',
            file_get_contents(__DIR__ . '/output/03 - single.txt')
        );
    }

    /**
     * Test that the code can be executed for "CodinGame".
     *
     * @group gravity_CodinGame
     */
    public function testCanExecuteCodinGame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - CodinGame.txt',
            file_get_contents(__DIR__ . '/output/04 - CodinGame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group gravity_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - simple.txt',
            file_get_contents(__DIR__ . '/output/05 - simple.txt')
        );
    }
}
