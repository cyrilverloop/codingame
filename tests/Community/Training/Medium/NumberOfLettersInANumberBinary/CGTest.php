<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\NumberOfLettersInANumberBinary;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\NumberOfLettersInANumberBinary\NumberOfLettersInANumberBinary;

/**
 * Tests for the "Number of letters in a number - Binary" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\NumberOfLettersInANumberBinary\NumberOfLettersInANumberBinary
 * @group numberOfLettersInANumberBinary
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NumberOfLettersInANumberBinary();
    }

    /**
     * Test that the code can be executed for "One past the example".
     *
     * @group numberOfLettersInANumberBinary_onePastTheExample
     */
    public function testCanExecuteOnePastTheExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one past the example.txt',
            14 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger start".
     *
     * @group numberOfLettersInANumberBinary_biggerStart
     */
    public function testCanExecuteBiggerStart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - bigger start.txt',
            16 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger n".
     *
     * @group numberOfLettersInANumberBinary_biggerN
     */
    public function testCanExecuteBiggerN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - bigger n.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A pattern emerges".
     *
     * @group numberOfLettersInANumberBinary_aPatternEmerges
     */
    public function testCanExecuteAPatternEmerges(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - a pattern emerges.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another pattern?".
     *
     * @group numberOfLettersInANumberBinary_anotherPattern
     */
    public function testCanExecuteAnotherPattern(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - another pattern?.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big numbers".
     *
     * @group numberOfLettersInANumberBinary_bigNumbers
     */
    public function testCanExecuteBigNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - big numbers.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger numbers".
     *
     * @group numberOfLettersInANumberBinary_biggerNumbers
     */
    public function testCanExecuteBiggerNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - bigger numbers.txt',
            18 . PHP_EOL
        );
    }
}
