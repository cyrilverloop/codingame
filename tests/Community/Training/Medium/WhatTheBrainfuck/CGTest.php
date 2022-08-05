<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\WhatTheBrainfuck;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\WhatTheBrainfuck\WhatTheBrainfuck;

/**
 * Tests for the "What the brainfuck !" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\WhatTheBrainfuck\WhatTheBrainfuck
 * @group whatTheBrainfuck
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new WhatTheBrainfuck();
    }

    /**
     * Test that the code can be executed for "A simple start".
     *
     * @group whatTheBrainfuck_aSimpleStart
     */
    public function testCanExecuteASimpleStart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple start.txt',
            "ABC" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hello World!".
     *
     * @group whatTheBrainfuck_helloWorld
     */
    public function testCanExecuteHelloWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - hello world!.txt',
            "Hello World!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Inputs multiplication".
     *
     * @group whatTheBrainfuck_inputsMultiplication
     */
    public function testCanExecuteInputsMultiplication(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - inputs multiplication.txt',
            "$" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Noisy code".
     *
     * @group whatTheBrainfuck_noisyCode
     */
    public function testCanExecuteNoisyCode(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - noisy code.txt',
            "Hello World!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Pointer out of bounds".
     *
     * @group whatTheBrainfuck_pointerOutOfBounds
     */
    public function testCanExecutePointerOutOfBounds(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - pointer out of bounds.txt',
            "POINTER OUT OF BOUNDS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Incorrect value".
     *
     * @group whatTheBrainfuck_incorrectValue
     */
    public function testCanExecuteIncorrectValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - incorrect value.txt',
            "INCORRECT VALUE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Syntax error".
     *
     * @group whatTheBrainfuck_syntaxError
     */
    public function testCanExecuteSyntaxError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - syntax error.txt',
            "SYNTAX ERROR" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple errors".
     *
     * @group whatTheBrainfuck_multipleErrors
     */
    public function testCanExecuteMultipleErrors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - multiple errors.txt',
            "POINTER OUT OF BOUNDS" . PHP_EOL
        );
    }
}
