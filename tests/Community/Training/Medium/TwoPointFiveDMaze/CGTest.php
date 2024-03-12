<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TwoPointFiveDMaze;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TwoPointFiveDMaze\TwoPointFiveDMaze;

/**
 * Tests for the "2.5D maze" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TwoPointFiveDMaze\TwoPointFiveDMaze
 * @group twoPointFiveDMaze
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TwoPointFiveDMaze();
    }

    /**
     * Test that the code can be executed for "Simple maze".
     *
     * @group calidBracketsInCode_simpleMaze
     */
    public function testCanExecuteSimpleMaze(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple maze.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "With slopes".
     *
     * @group calidBracketsInCode_withSlopes
     */
    public function testCanExecuteWithSlopes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - with slopes.txt',
            19 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "With bridges".
     *
     * @group calidBracketsInCode_withBridges
     */
    public function testCanExecuteWithBridges(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - with bridges.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big maze".
     *
     * @group calidBracketsInCode_bigMaze
     */
    public function testCanExecuteBigMaze(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big maze.txt',
            33 . PHP_EOL
        );
    }
}
