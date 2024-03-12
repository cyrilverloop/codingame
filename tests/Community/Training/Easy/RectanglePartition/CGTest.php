<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RectanglePartition;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RectanglePartition\RectanglePartition;

/**
 * Tests for the "Rectangle partition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RectanglePartition\RectanglePartition
 * @group rectanglePartition
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RectanglePartition();
    }

    /**
     * Test that the code can be executed for "Sample".
     *
     * @group rectanglePartition_sample
     */
    public function testCanExecuteSample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - sample.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Squarish".
     *
     * @group rectanglePartition_squarish
     */
    public function testCanExecuteSquarish(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - squarish.txt',
            14 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger 1".
     *
     * @group rectanglePartition_bigger1
     */
    public function testCanExecuteBigger1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - bigger 1.txt',
            123 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger 2".
     *
     * @group rectanglePartition_bigger2
     */
    public function testCanExecuteBigger2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bigger 2.txt',
            36 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lo-density 1".
     *
     * @group rectanglePartition_loDensity1
     */
    public function testCanExecuteLoDensity1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - lo-density 1.txt',
            25 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lo-density 2".
     *
     * @group rectanglePartition_loDensity2
     */
    public function testCanExecuteLoDensity2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - lo-density 2.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hi-density 1".
     *
     * @group rectanglePartition_hiDensity1
     */
    public function testCanExecuteHiDensity1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - hi-density 1.txt',
            22281 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hi-density 2".
     *
     * @group rectanglePartition_hiDensity2
     */
    public function testCanExecuteHiDensity2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - hi-density 2.txt',
            18431 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Imbalance".
     *
     * @group rectanglePartition_imbalance
     */
    public function testCanExecuteImbalance(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - imbalance.txt',
            42 . PHP_EOL
        );
    }
}
