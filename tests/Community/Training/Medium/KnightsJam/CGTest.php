<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\KnightsJam;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\KnightsJam\KnightsJam;

/**
 * Tests for the "Knights jam" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\KnightsJam\KnightsJam
 * @group knightsJam
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new KnightsJam();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group knightsJam_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Central problem #1".
     *
     * @group knightsJam_centralProblem1
     */
    public function testCanExecuteCentralProblem1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - central problem #1.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Central problem #2".
     *
     * @group knightsJam_centralProblem2
     */
    public function testCanExecuteCentralProblem2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - central problem #2.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reachable #1".
     *
     * @group knightsJam_reachable1
     */
    public function testCanExecuteReachable1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - reachable #1.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unreachable #1".
     *
     * @group knightsJam_unreachable1
     */
    public function testCanExecuteUnreachable1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - unreachable #1.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reachable #2".
     *
     * @group knightsJam_reachable2
     */
    public function testCanExecuteReachable2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - reachable #2.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unreachable #2".
     *
     * @group knightsJam_unreachable2
     */
    public function testCanExecuteUnreachable2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - unreachable #2.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reachable #3".
     *
     * @group knightsJam_reachable3
     */
    public function testCanExecuteReachable3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - reachable #3.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unreachable #3".
     *
     * @group knightsJam_unreachable3
     */
    public function testCanExecuteUnreachable3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - unreachable #3.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reachable #4".
     *
     * @group knightsJam_reachable4
     */
    public function testCanExecuteReachable4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - reachable #4.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unreachable #4".
     *
     * @group knightsJam_unreachable4
     */
    public function testCanExecuteUnreachable4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - unreachable #4.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unreachable #5".
     *
     * @group knightsJam_unreachable5
     */
    public function testCanExecuteUnreachable5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - unreachable #5.txt',
            -1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reachable #5".
     *
     * @group knightsJam_reachable5
     */
    public function testCanExecuteReachable5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - reachable #5.txt',
            21 . PHP_EOL
        );
    }
}
