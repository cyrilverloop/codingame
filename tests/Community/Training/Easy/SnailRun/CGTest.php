<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SnailRun;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SnailRun\SnailRun;

/**
 * Tests for the "Snail run" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SnailRun\SnailRun
 * @group snailRun
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SnailRun();
    }

    /**
     * Test that the code can be executed for "Simple run".
     *
     * @group snailRun_simpleRun
     */
    public function testCanExecuteSimpleRun(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple run.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Run in progress".
     *
     * @group snailRun_runInProgress
     */
    public function testCanExecuteRunInProgress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - run in progress.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only one arrives".
     *
     * @group snailRun_onlyOneArrives
     */
    public function testCanExecuteOnlyOneArrives(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - only one arrives.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "In a mess".
     *
     * @group snailRun_inAMess
     */
    public function testCanExecuteInAMess(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - in a mess.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conversely".
     *
     * @group snailRun_conversely
     */
    public function testCanExecuteConversely(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - conversely.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Difficult 1".
     *
     * @group snailRun_difficult1
     */
    public function testCanExecuteDifficult1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - difficult 1.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Difficult 2".
     *
     * @group snailRun_difficult2
     */
    public function testCanExecuteDifficult2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - difficult 2.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Difficult 3".
     *
     * @group snailRun_difficult3
     */
    public function testCanExecuteDifficult3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - difficult 3.txt',
            2 . PHP_EOL
        );
    }
}
