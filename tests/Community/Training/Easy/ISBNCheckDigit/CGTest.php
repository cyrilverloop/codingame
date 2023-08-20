<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ISBNCheckDigit;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ISBNCheckDigit\ISBNCheckDigit;

/**
 * Tests for the "ISBN check digit" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ISBNCheckDigit\ISBNCheckDigit
 * @group ISBNCheckDigit
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ISBNCheckDigit();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group ISBNCheckDigit_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Short".
     *
     * @group ISBNCheckDigit_short
     */
    public function testCanExecuteShort(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - short.txt',
            file_get_contents(__DIR__ . '/output/02 - short.txt')
        );
    }

    /**
     * Test that the code can be executed for "Longer".
     *
     * @group ISBNCheckDigit_longer
     */
    public function testCanExecuteLonger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - longer.txt',
            file_get_contents(__DIR__ . '/output/03 - longer.txt')
        );
    }

    /**
     * Test that the code can be executed for "Much longer".
     *
     * @group ISBNCheckDigit_muchLonger
     */
    public function testCanExecuteMuchLonger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - much longer.txt',
            file_get_contents(__DIR__ . '/output/04 - much longer.txt')
        );
    }
}
