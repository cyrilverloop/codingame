<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheBrokenEditor;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\TheBrokenEditor\TheBrokenEditor;

/**
 * Tests for the "The broken editor" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheBrokenEditor\TheBrokenEditor
 * @group theBrokenEditor
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheBrokenEditor();
    }

    /**
     * Test that the code can be executed for "No mistakes".
     *
     * @group theBrokenEditor_noMistakes
     */
    public function testCanExecuteNoMistakes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - no mistakes.txt',
            'echo "Hello World!";' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single mistake".
     *
     * @group theBrokenEditor_singleMistake
     */
    public function testCanExecuteSingleMistake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - single mistake.txt',
            "Midnight takes your heart and your soul" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Out of bounds".
     *
     * @group theBrokenEditor_OutOfBounds
     */
    public function testCanExecuteOutOfBounds(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - out of bounds.txt',
            "SELECT * FROM users WHERE age = 18;" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Backspace 1".
     *
     * @group theBrokenEditor_backspace1
     */
    public function testCanExecuteBackspace1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - backspace 1.txt',
            'print $_=~/[9z]/i;' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Backspace 2".
     *
     * @group theBrokenEditor_backspace2
     */
    public function testCanExecuteBackspace2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - backspace 2.txt',
            ":D" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "007".
     *
     * @group theBrokenEditor_007
     */
    public function testCanExecute007(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 007.txt',
            '"Bond. James Bond." 007' . PHP_EOL
        );
    }
}
