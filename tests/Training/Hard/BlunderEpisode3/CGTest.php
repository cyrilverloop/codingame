<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\BlunderEpisode3;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Hard\BlunderEpisode3\BlunderEpisode3;

/**
 * Tests for the "Blunder - episode 3" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\BlunderEpisode3\BlunderEpisode3
 * @group blunderEpisode3
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BlunderEpisode3();
    }

    /**
     * Test that the code can be executed for "O(1)".
     *
     * @group blunderEpisode3_O1
     */
    public function testCanExecuteO1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - O(1).txt',
            "O(1)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(log n)".
     *
     * @group blunderEpisode3_OLogN
     */
    public function testCanExecuteOLogN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - O(log n).txt',
            "O(log n)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(n)".
     *
     * @group blunderEpisode3_ON
     */
    public function testCanExecuteON(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - O(n).txt',
            "O(n)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(n log n)".
     *
     * @group blunderEpisode3_ONLogN
     */
    public function testCanExecuteONLogN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - O(n log n).txt',
            "O(n log n)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(n^2)".
     *
     * @group blunderEpisode3_ON2
     */
    public function testCanExecuteON2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - O(n^2).txt',
            "O(n^2)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(n^2 log n)".
     *
     * @group blunderEpisode3_ON2LogN
     */
    public function testCanExecuteON2LogN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - O(n^2 log n).txt',
            "O(n^2 log n)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(n^3)".
     *
     * @group blunderEpisode3_ON3
     */
    public function testCanExecuteON3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - O(n^3).txt',
            "O(n^3)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "O(2^n)".
     *
     * @group blunderEpisode3_O2N
     */
    public function testCanExecuteO2N(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - O(2^n).txt',
            "O(2^n)" . PHP_EOL
        );
    }
}
