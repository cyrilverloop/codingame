<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ContainerTerminal;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ContainerTerminal\ContainerTerminal;

/**
 * Tests for the "Container terminal" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ContainerTerminal\ContainerTerminal
 * @group containerTerminal
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ContainerTerminal();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group containerTerminal_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            file_get_contents(__DIR__ . '/output/01 - easy.txt')
        );
    }

    /**
     * Test that the code can be executed for "15".
     *
     * @group containerTerminal_15
     */
    public function testCanExecute15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 15.txt',
            file_get_contents(__DIR__ . '/output/02 - 15.txt')
        );
    }

    /**
     * Test that the code can be executed for "30".
     *
     * @group containerTerminal_30
     */
    public function testCanExecute30(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 30.txt',
            file_get_contents(__DIR__ . '/output/03 - 30.txt')
        );
    }

    /**
     * Test that the code can be executed for "60".
     *
     * @group containerTerminal_60
     */
    public function testCanExecute60(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 60.txt',
            file_get_contents(__DIR__ . '/output/04 - 60.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long queue".
     *
     * @group containerTerminal_longQueue
     */
    public function testCanExecuteLongQueue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long queue.txt',
            file_get_contents(__DIR__ . '/output/05 - long queue.txt')
        );
    }
}
