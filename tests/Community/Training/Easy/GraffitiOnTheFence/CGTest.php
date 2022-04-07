<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\GraffitiOnTheFence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\GraffitiOnTheFence\GraffitiOnTheFence;

/**
 * Tests for the "Graffiti on the fence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\GraffitiOnTheFence\GraffitiOnTheFence
 * @group graffitiOnTheFence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new GraffitiOnTheFence();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group graffitiOnTheFence_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Overlapping 1".
     *
     * @group graffitiOnTheFence_overlapping1
     */
    public function testCanExecuteOverlapping1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - overlapping 1.txt',
            file_get_contents(__DIR__ . '/output/02 - overlapping 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Overlapping 2".
     *
     * @group graffitiOnTheFence_overlapping2
     */
    public function testCanExecuteOverlapping2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - overlapping 2.txt',
            file_get_contents(__DIR__ . '/output/03 - overlapping 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "All painted".
     *
     * @group graffitiOnTheFence_allPainted
     */
    public function testCanExecuteAllPainted(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - all painted.txt',
            "All painted" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Continuous".
     *
     * @group graffitiOnTheFence_continuous
     */
    public function testCanExecuteContinuous(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - continuous.txt',
            "0 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long fence 1".
     *
     * @group graffitiOnTheFence_longFence1
     */
    public function testCanExecuteLongFence1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - long fence 1.txt',
            file_get_contents(__DIR__ . '/output/06 - long fence 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long fence 2".
     *
     * @group graffitiOnTheFence_longFence2
     */
    public function testCanExecuteLongFence2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - long fence 2.txt',
            file_get_contents(__DIR__ . '/output/07 - long fence 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long fence 3".
     *
     * @group graffitiOnTheFence_longFence3
     */
    public function testCanExecuteLongFence3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - long fence 3.txt',
            file_get_contents(__DIR__ . '/output/08 - long fence 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long fence 4".
     *
     * @group graffitiOnTheFence_longFence4
     */
    public function testCanExecuteLongFence4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - long fence 4.txt',
            file_get_contents(__DIR__ . '/output/09 - long fence 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long fence 5".
     *
     * @group graffitiOnTheFence_longFence5
     */
    public function testCanExecuteLongFence5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - long fence 5.txt',
            file_get_contents(__DIR__ . '/output/10 - long fence 5.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long fence 6".
     *
     * @group graffitiOnTheFence_longFence6
     */
    public function testCanExecuteLongFence6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - long fence 6.txt',
            file_get_contents(__DIR__ . '/output/11 - long fence 6.txt')
        );
    }

    /**
     * Test that the code can be executed for "Minor test 1".
     *
     * @group graffitiOnTheFence_minorTest1
     */
    public function testCanExecuteMinorTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - minor test 1.txt',
            "6 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Minor test 2".
     *
     * @group graffitiOnTheFence_minorTest2
     */
    public function testCanExecuteMinorTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - minor test 2.txt',
            "All painted" . PHP_EOL
        );
    }
}
