<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TedsCompiler;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TedsCompiler\TedsCompiler;

/**
 * Tests for the "Ted's compiler" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TedsCompiler\TedsCompiler
 * @group tedsCompiler
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TedsCompiler();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group tedsCompiler_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Short string".
     *
     * @group tedsCompiler_shortString
     */
    public function testCanExecuteShortString(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - short string.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not good".
     *
     * @group tedsCompiler_notGood
     */
    public function testCanExecuteNotGood(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - not good.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Well formatted".
     *
     * @group tedsCompiler_wellFormatted
     */
    public function testCanExecuteWellFormatted(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - well formatted.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long string".
     *
     * @group tedsCompiler_longString
     */
    public function testCanExecuteLongString(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long string.txt',
            14 . PHP_EOL
        );
    }
}
