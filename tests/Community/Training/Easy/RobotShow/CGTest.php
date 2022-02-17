<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RobotShow;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\RobotShow\RobotShow;

/**
 * Tests for the "Robot show" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RobotShow\RobotShow
 * @group robotShow
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RobotShow();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group robotShow_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group robotShow_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More bots".
     *
     * @group robotShow_moreBots
     */
    public function testCanExecuteMoreBots(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more bots.txt',
            102 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ping pong".
     *
     * @group robotShow_pingPong
     */
    public function testCanExecutePingPong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - ping pong.txt',
            112 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Traffic jam".
     *
     * @group robotShow_trafficJam
     */
    public function testCanExecuteTrafficJam(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - traffic jam.txt',
            153 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Singular".
     *
     * @group robotShow_singular
     */
    public function testCanExecuteSingular(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - singular.txt',
            7 . PHP_EOL
        );
    }
}
