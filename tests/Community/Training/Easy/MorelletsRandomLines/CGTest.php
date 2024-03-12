<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MorelletsRandomLines;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MorelletsRandomLines\MorelletsRandomLines;

/**
 * Tests for the "Morellet’s random lines" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MorelletsRandomLines\MorelletsRandomLines
 * @group morelletsRandomLines
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MorelletsRandomLines();
    }

    /**
     * Test that the code can be executed for "One line".
     *
     * @group morelletsRandomLines_oneLine
     */
    public function testCanExecuteOneLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one line.txt',
            "YES" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two lines".
     *
     * @group morelletsRandomLines_twoLines
     */
    public function testCanExecuteTwoLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two lines.txt',
            "YES" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "On a line".
     *
     * @group morelletsRandomLines_onALine
     */
    public function testCanExecuteOnALine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - on a line.txt',
            "ON A LINE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many lines".
     *
     * @group morelletsRandomLines_manyLines
     */
    public function testCanExecuteManyLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - many lines.txt',
            "NO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same line".
     *
     * @group morelletsRandomLines_sameLine
     */
    public function testCanExecuteSameLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - same line.txt',
            "YES" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lots of lines".
     *
     * @group morelletsRandomLines_lotsOfLines
     */
    public function testCanExecuteLotsOfLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - lots of lines.txt',
            "ON A LINE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lots of lines 2".
     *
     * @group morelletsRandomLines_lotsOfLines2
     */
    public function testCanExecuteLotsOfLines2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - lots of lines 2.txt',
            "NO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mind the sign".
     *
     * @group morelletsRandomLines_mindTheSign
     */
    public function testCanExecuteMindTheSign(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - mind the sign.txt',
            "NO" . PHP_EOL
        );
    }
}
