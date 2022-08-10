<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CGFungeInterpreter;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\CGFungeInterpreter\CGFungeInterpreter;

/**
 * Tests for the "CGFunge interpreter" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CGFungeInterpreter\CGFungeInterpreter
 * @group CGFungeInterpreter
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CGFungeInterpreter();
    }

    /**
     * Test that the code can be executed for "Just math".
     *
     * @group goroWantChocolate_justMath
     */
    public function testCanExecuteJustMath(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - just math.txt',
            "42" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple text".
     *
     * @group goroWantChocolate_simpleText
     */
    public function testCanExecuteSimpleText(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple text.txt',
            "Simple text" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Go all ways".
     *
     * @group goroWantChocolate_goAllWays
     */
    public function testCanExecuteGoAllWays(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - go all ways.txt',
            "CGCGCG" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Very hello world".
     *
     * @group goroWantChocolate_veryHelloWorld
     */
    public function testCanExecuteVeryHelloWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - very hello world.txt',
            "Hello, Hello, Hello, Hello World!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sing me a song".
     *
     * @group diceProbabilityCalculator_singMeASong
     */
    public function testCanExecuteADieAndTwoAdditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - sing me a song.txt',
            file_get_contents(__DIR__ . '/output/05 - sing me a song.txt')
        );
    }

    /**
     * Test that the code can be executed for "Skip & short lines".
     *
     * @group goroWantChocolate_skipAndShortLines
     */
    public function testCanExecuteSkipAndShortLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - skip & short lines.txt',
            "Yay!" . PHP_EOL
        );
    }
}
