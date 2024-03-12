<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\EqualizingArrays;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\EqualizingArrays\EqualizingArrays;

/**
 * Tests for the "Equalizing arrays" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\EqualizingArrays\EqualizingArrays
 * @group equalizingArrays
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new EqualizingArrays();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group equalizingArrays_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            file_get_contents(__DIR__ . '/output/01 - simple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Binary".
     *
     * @group equalizingArrays_binary
     */
    public function testCanExecuteBinary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - binary.txt',
            file_get_contents(__DIR__ . '/output/02 - binary.txt')
        );
    }

    /**
     * Test that the code can be executed for "One hill".
     *
     * @group equalizingArrays_oneHill
     */
    public function testCanExecuteOneHill(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one hill.txt',
            file_get_contents(__DIR__ . '/output/03 - one hill.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two hill".
     *
     * @group equalizingArrays_twoHill
     */
    public function testCanExecuteTwoHill(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two hill.txt',
            file_get_contents(__DIR__ . '/output/04 - two hill.txt')
        );
    }

    /**
     * Test that the code can be executed for "Random".
     *
     * @group equalizingArrays_random
     */
    public function testCanExecuteRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - random.txt',
            file_get_contents(__DIR__ . '/output/05 - random.txt')
        );
    }

    /**
     * Test that the code can be executed for "Opposite 1".
     *
     * @group equalizingArrays_opposite1
     */
    public function testCanExecuteOpposite1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - opposite 1.txt',
            file_get_contents(__DIR__ . '/output/06 - opposite 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Opposite 2".
     *
     * @group equalizingArrays_opposite2
     */
    public function testCanExecuteOpposite2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - opposite 2.txt',
            file_get_contents(__DIR__ . '/output/07 - opposite 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "One hill large".
     *
     * @group equalizingArrays_oneHillLarge
     */
    public function testCanExecuteOneHillLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - one hill large.txt',
            file_get_contents(__DIR__ . '/output/08 - one hill large.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two hill large".
     *
     * @group equalizingArrays_twoHillLarge
     */
    public function testCanExecuteTwoHillLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - two hill large.txt',
            file_get_contents(__DIR__ . '/output/09 - two hill large.txt')
        );
    }

    /**
     * Test that the code can be executed for "Blocks".
     *
     * @group equalizingArrays_blocks
     */
    public function testCanExecuteBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - blocks.txt',
            file_get_contents(__DIR__ . '/output/10 - blocks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Zero".
     *
     * @group equalizingArrays_zero
     */
    public function testCanExecuteZero(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - zero.txt',
            0 . PHP_EOL
        );
    }
}
