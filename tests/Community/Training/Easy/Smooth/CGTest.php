<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Smooth;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\Smooth\Smooth;

/**
 * Tests for the "Smooth!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Smooth\Smooth
 * @group smooth
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Smooth();
    }

    /**
     * Test that the code can be executed for "Small bulk".
     *
     * @group smooth_smallBulk
     */
    public function testCanExecuteSmallBulk(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small bulk.txt',
            file_get_contents(__DIR__ . '/output/01 - small bulk.txt')
        );
    }

    /**
     * Test that the code can be executed for "Easy victories".
     *
     * @group smooth_easyVictories
     */
    public function testCanExecuteEasyVictories(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy victories.txt',
            file_get_contents(__DIR__ . '/output/02 - easy victories.txt')
        );
    }

    /**
     * Test that the code can be executed for "Easy defeats".
     *
     * @group smooth_easyDefeats
     */
    public function testCanExecuteEasyDefeats(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - easy defeats.txt',
            file_get_contents(__DIR__ . '/output/03 - easy defeats.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bigger".
     *
     * @group smooth_bigger
     */
    public function testCanExecuteBigger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bigger.txt',
            file_get_contents(__DIR__ . '/output/04 - bigger.txt')
        );
    }
}
