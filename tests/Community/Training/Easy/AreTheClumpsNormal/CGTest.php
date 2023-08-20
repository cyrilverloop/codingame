<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\AreTheClumpsNormal;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\AreTheClumpsNormal\AreTheClumpsNormal;

/**
 * Tests for the "Are the clumps normal" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\AreTheClumpsNormal\AreTheClumpsNormal
 * @group areTheClumpsNormal
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AreTheClumpsNormal();
    }

    /**
     * Test that the code can be executed for "Simple normal".
     *
     * @group areTheClumpsNormal_simpleNormal
     */
    public function testCanExecuteSimpleNormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple normal.txt',
            "Normal" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple abnormal".
     *
     * @group areTheClumpsNormal_simpleAbnormal
     */
    public function testCanExecuteSimpleAbnormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple abnormal.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Abnormal at the last second".
     *
     * @group areTheClumpsNormal_abnormalAtTheLastSecond
     */
    public function testCanExecuteAbnormalAtTheLastSecond(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - abnormal at the last second.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wildly abnormal".
     *
     * @group areTheClumpsNormal_wildlyAbnormal
     */
    public function testCanExecuteWildlyAbnormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - wildly abnormal.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger than 2^64 Normal".
     *
     * @group areTheClumpsNormal_biggerThan2p64Normal
     */
    public function testCanExecuteBiggerThan2p64Normal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - bigger than 2^64 Normal.txt',
            "Normal" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Way bigger than 2^64 abnormal".
     *
     * @group areTheClumpsNormal_wayBiggerThan2p64Abnormal
     */
    public function testCanExecuteWayBiggerThan2p64Abnormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - way bigger than 2^64 abnormal.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lots of abnormal".
     *
     * @group areTheClumpsNormal_lotsOfAbnormal
     */
    public function testCanExecuteLotsOfAbnormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - lots of abnormal.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rep digit".
     *
     * @group areTheClumpsNormal_repDigit
     */
    public function testCanExecuteRepDigit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - rep digit.txt',
            "Normal" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Take the first deviation".
     *
     * @group areTheClumpsNormal_takeTheFirstDeviation
     */
    public function testCanExecuteTakeTheFirstDeviation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - take the first deviation.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum normal".
     *
     * @group areTheClumpsNormal_maximumNormal
     */
    public function testCanExecuteMaximumNormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - maximum normal.txt',
            "Normal" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum abnormal".
     *
     * @group areTheClumpsNormal_maximumAbnormal
     */
    public function testCanExecuteMaximumAbnormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - maximum abnormal.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Humongous binary".
     *
     * @group areTheClumpsNormal_humongousBinary
     */
    public function testCanExecuteHumongousBinary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - humongous binary.txt',
            "Normal" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cooldown".
     *
     * @group areTheClumpsNormal_cooldown
     */
    public function testCanExecuteCooldown(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - cooldown.txt',
            4 . PHP_EOL
        );
    }
}
