<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SevenSegmentScanner;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SevenSegmentScanner\SevenSegmentScanner;

/**
 * Tests for the "7-segment scanner" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SevenSegmentScanner\SevenSegmentScanner
 * @group sevenSegmentScanner
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SevenSegmentScanner();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group sevenSegmentScanner_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "0123456789" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeroes".
     *
     * @group sevenSegmentScanner_zeroes
     */
    public function testCanExecuteZeroes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - zeroes.txt',
            "000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Short number".
     *
     * @group sevenSegmentScanner_shortNumber
     */
    public function testCanExecuteShortNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - short number.txt',
            "625" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long number".
     *
     * @group sevenSegmentScanner_longNumber
     */
    public function testCanExecuteLongNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - long number.txt',
            "0123456789876543210" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Super long number".
     *
     * @group sevenSegmentScanner_superLongNumber
     */
    public function testCanExecuteSuperLongNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - super long number.txt',
            file_get_contents(__DIR__ . '/output/05 - super long number.txt')
        );
    }
}
