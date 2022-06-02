<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MarkovTextGeneration;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\MarkovTextGeneration\MarkovTextGeneration;

/**
 * Tests for the "Markov text generation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MarkovTextGeneration\MarkovTextGeneration
 * @group markovTextGeneration
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MarkovTextGeneration();
    }

    /**
     * Test that the code can be executed for "Fish example depth 2".
     *
     * @group markovTextGeneration_fishExampleDepth2
     */
    public function testCanExecuteFishExampleDepth2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - fish example depth 2.txt',
            "fish is bad and" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fish example depth 1".
     *
     * @group markovTextGeneration_fishExampleDepth1
     */
    public function testCanExecuteFishExampleDepth1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - fish example depth 1.txt',
            "one fish is good" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Width 2".
     *
     * @group markovTextGeneration_width2
     */
    public function testCanExecuteWidth2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - width 2.txt',
            "dorothy was a girl named dorothy stop dorothy had a" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Width 3".
     *
     * @group markovTextGeneration_width3
     */
    public function testCanExecuteWidth3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - width 3.txt',
            "stop dorothy had a dog named toto stop dorothy lived" . PHP_EOL
        );
    }
}
