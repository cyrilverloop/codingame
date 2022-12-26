<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BijectiveNumeration;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BijectiveNumeration\BijectiveNumeration;

/**
 * Tests for the "Bijective numeration" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BijectiveNumeration\BijectiveNumeration
 * @group bijectiveNumeration
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BijectiveNumeration();
    }

    /**
     * Test that the code can be executed for "Simple parsing".
     *
     * @group bijectiveNumeration_simpleParsing
     */
    public function testCanExecuteSimpleParsing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple parsing.txt',
            "32" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parsing".
     *
     * @group bijectiveNumeration_parsing
     */
    public function testCanExecuteParsing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - parsing.txt',
            "234" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More parsing".
     *
     * @group bijectiveNumeration_moreParsing
     */
    public function testCanExecuteMoreParsing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more parsing.txt',
            "2345" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple generation".
     *
     * @group bijectiveNumeration_simpleGeneration
     */
    public function testCanExecuteSimpleGeneration(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - simple generation.txt',
            "A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Generation".
     *
     * @group bijectiveNumeration_generation
     */
    public function testCanExecuteGeneration(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - generation.txt',
            "A24" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More generation".
     *
     * @group bijectiveNumeration_moreGeneration
     */
    public function testCanExecuteMoreGeneration(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - more generation.txt',
            "AA" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mixed test".
     *
     * @group bijectiveNumeration_mixedTest
     */
    public function testCanExecuteMixedTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - mixed test.txt',
            "1AAA" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger test".
     *
     * @group bijectiveNumeration_biggerTest
     */
    public function testCanExecuteBiggerTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - bigger test.txt',
            "9A3A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Huge test".
     *
     * @group bijectiveNumeration_hugeTest
     */
    public function testCanExecuteHugeTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - huge test.txt',
            "1344AA18A" . PHP_EOL
        );
    }
}
