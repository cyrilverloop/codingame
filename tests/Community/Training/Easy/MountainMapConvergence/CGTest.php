<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MountainMapConvergence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\MountainMapConvergence\MountainMapConvergence;

/**
 * Tests for the "Mountain map convergence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MountainMapConvergence\MountainMapConvergence
 * @group mountainMapConvergence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MountainMapConvergence();
    }

    /**
     * Test that the code can be executed for "Familiar".
     *
     * @group mountainMapConvergence_familiar
     */
    public function testCanExecuteFamiliar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - familiar.txt',
            file_get_contents(__DIR__ . '/output/01 - familiar.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wait i was correct on the last one".
     *
     * @group mountainMapConvergence_waitIWasCorrectOnTheLastOne
     */
    public function testCanExecuteWaitIWasCorrectOnTheLastOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - wait i was correct on the last one.txt',
            file_get_contents(__DIR__ . '/output/02 - wait i was correct on the last one.txt')
        );
    }

    /**
     * Test that the code can be executed for "Twin peaks".
     *
     * @group mountainMapConvergence_twinPeaks
     */
    public function testCanExecuteTwinPeaks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - twin peaks.txt',
            file_get_contents(__DIR__ . '/output/03 - twin peaks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Negatives".
     *
     * @group mountainMapConvergence_negatives
     */
    public function testCanExecuteNegatives(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - negatives.txt',
            file_get_contents(__DIR__ . '/output/04 - negatives.txt')
        );
    }

    /**
     * Test that the code can be executed for "Tricky negatives".
     *
     * @group mountainMapConvergence_trickyNegatives
     */
    public function testCanExecuteTrickyNegatives(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - tricky negatives.txt',
            file_get_contents(__DIR__ . '/output/05 - tricky negatives.txt')
        );
    }

    /**
     * Test that the code can be executed for "More tricky negatives".
     *
     * @group mountainMapConvergence_moreTrickyNegatives
     */
    public function testCanExecuteMoreTrickyNegatives(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - more tricky negatives.txt',
            file_get_contents(__DIR__ . '/output/06 - more tricky negatives.txt')
        );
    }

    /**
     * Test that the code can be executed for "Crazy mountains".
     *
     * @group mountainMapConvergence_crazyMountains
     */
    public function testCanExecuteCrazyMountains(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - crazy mountains.txt',
            file_get_contents(__DIR__ . '/output/07 - crazy mountains.txt')
        );
    }
}
