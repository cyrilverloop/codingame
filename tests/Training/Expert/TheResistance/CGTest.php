<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Expert\TheResistance;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Training\Expert\TheResistance\TheResistance;

/**
 * Tests for "The resistance" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Expert\TheResistance\TheResistance
 * @group theResistance
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheResistance();
    }

    /**
     * Test that the code can be executed for "Correct detection of a letter".
     *
     * @group theResistance_correctDetectionOfALetter
     */
    public function testCanExecuteCorrectDetectionOfALetter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - correct detection of a letter.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Correct detection of a word".
     *
     * @group theResistance_correctDetectionOfAWord
     */
    public function testCanExecuteCorrectDetectionOfAWord(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - correct detection of a word.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple messages".
     *
     * @group theResistance_simpleMessages
     */
    public function testCanExecuteSimpleMessages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - simple messages.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long sequence, large dictionary".
     *
     * @group theResistance_longSequenceLargeDictionary
     */
    public function testCanExecuteLongSequenceLargeDictionary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - long sequence, large dictionary.txt',
            57330892800 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same encoding for different words".
     *
     * @group theResistance_sameEncodingForDifferentWords
     */
    public function testCanExecuteSameEncodingForDifferentWords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - same encoding for different words.txt',
            125 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many possibilities".
     *
     * @group theResistance_manyPossibilities
     */
    public function testCanExecuteManyPossibilities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - many possibilities.txt',
            2971215073 . PHP_EOL
        );
    }
}
