<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\WhatsSoComplexAboutMandelbrot;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\WhatsSoComplexAboutMandelbrot\WhatsSoComplexAboutMandelbrot;

/**
 * Tests for the "What's so complex about Mandelbrot?" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\WhatsSoComplexAboutMandelbrot\WhatsSoComplexAboutMandelbrot
 * @group whatsSoComplexAboutMandelbrot
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new WhatsSoComplexAboutMandelbrot();
    }

    /**
     * Test that the code can be executed for "Real out".
     *
     * @group whatsSoComplexAboutMandelbrot_realOut
     */
    public function testCanExecuteRealOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - real out.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Imaginary out".
     *
     * @group whatsSoComplexAboutMandelbrot_imaginaryOut
     */
    public function testCanExecuteImaginaryOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - imaginary out.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Real in".
     *
     * @group whatsSoComplexAboutMandelbrot_realIn
     */
    public function testCanExecuteRealIn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - real in.txt',
            45 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Imaginary in".
     *
     * @group whatsSoComplexAboutMandelbrot_imaginaryIn
     */
    public function testCanExecuteImaginaryIn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - imaginary in.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex out".
     *
     * @group whatsSoComplexAboutMandelbrot_complexOut
     */
    public function testCanExecuteComplexOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - complex out.txt',
            124 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex in".
     *
     * @group whatsSoComplexAboutMandelbrot_complexIn
     */
    public function testCanExecuteComplexIn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - complex in.txt',
            822 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Check your absolute value".
     *
     * @group whatsSoComplexAboutMandelbrot_checkYourAbsoluteValue
     */
    public function testCanExecuteCheckYourAbsoluteValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - check your absolute value.txt',
            12 . PHP_EOL
        );
    }
}
