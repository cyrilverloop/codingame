<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GreenValleys;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\GreenValleys\GreenValleys;

/**
 * Tests for the "Green valleys" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GreenValleys\GreenValleys
 * @group greenValleys
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GreenValleys();
    }

    /**
     * Test that the code can be executed for "One valley".
     *
     * @group goroWantChocolate_oneValley
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one valley.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two valleys".
     *
     * @group goroWantChocolate_twoValleys
     */
    public function testCanExecuteTwoValleys(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two valleys.txt',
            1072 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Three valleys".
     *
     * @group goroWantChocolate_threeValleys
     */
    public function testCanExecuteThreeValleys(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - three valleys.txt',
            51 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No valley".
     *
     * @group goroWantChocolate_noValley
     */
    public function testCanExecuteNoValley(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no valley.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Alps and valleys".
     *
     * @group goroWantChocolate_alpsAndValleys
     */
    public function testCanExecuteAlpsAndValleys(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - alps and valleys.txt',
            420 . PHP_EOL
        );
    }
}
