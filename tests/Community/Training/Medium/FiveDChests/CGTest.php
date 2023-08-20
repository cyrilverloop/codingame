<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FiveDChests;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FiveDChests\FiveDChests;

/**
 * Tests for the "5D chests" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FiveDChests\FiveDChests
 * @group fiveDChests
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FiveDChests();
    }

    /**
     * Test that the code can be executed for "N=5".
     *
     * @group floodFillExample_N5
     */
    public function testCanExecuteN5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - N=5.txt',
            file_get_contents(__DIR__ . '/output/01 - N=5.txt')
        );
    }

    /**
     * Test that the code can be executed for "N=10".
     *
     * @group floodFillExample_N10
     */
    public function testCanExecuteN10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - N=10.txt',
            file_get_contents(__DIR__ . '/output/02 - N=10.txt')
        );
    }

    /**
     * Test that the code can be executed for "N=15".
     *
     * @group floodFillExample_N15
     */
    public function testCanExecuteN15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - N=15.txt',
            file_get_contents(__DIR__ . '/output/03 - N=15.txt')
        );
    }

    /**
     * Test that the code can be executed for "N=20".
     *
     * @group floodFillExample_N20
     */
    public function testCanExecuteN20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - N=20.txt',
            file_get_contents(__DIR__ . '/output/04 - N=20.txt')
        );
    }
}
