<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PlagueJr;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\PlagueJr\PlagueJr;

/**
 * Tests for the "Plague, jr" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PlagueJr\PlagueJr
 * @group plagueJr
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new PlagueJr();
    }

    /**
     * Test that the code can be executed for "The example".
     *
     * @group plagueJr_theExample
     */
    public function testCanExecuteTheExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - the example.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Easy case".
     *
     * @group plagueJr_easyCase
     */
    public function testCanExecuteEasyCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy case.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Advanced case".
     *
     * @group plagueJr_advancedCase
     */
    public function testCanExecuteAdvancedCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - advanced case.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Donut case".
     *
     * @group plagueJr_donutCase
     */
    public function testCanExecuteDonutCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - donut case.txt',
            500 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Spokey case".
     *
     * @group plagueJr_spokeyCase
     */
    public function testCanExecuteSpokeyCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - spokey case.txt',
            1 . PHP_EOL
        );
    }
}
