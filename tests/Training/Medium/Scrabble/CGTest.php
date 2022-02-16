<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\Scrabble;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\Scrabble\Scrabble;

/**
 * Tests for the "Scrabble" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\Scrabble\Scrabble
 * @group scrabble
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Scrabble();
    }

    /**
     * Test that the code can be executed for "Only one word".
     *
     * @group scrabble_onlyOneWord
     */
    public function testCanExecuteOnlyOneWord(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - only one word.txt',
            'which' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 words with the same value".
     *
     * @group scrabble_2WordsWithTheSameValue
     */
    public function testCanExecute2WordsWithTheSameValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 2 words with the same value.txt',
            'potsie' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 words with different values".
     *
     * @group scrabble_2WordsWithDifferentValues
     */
    public function testCanExecute2WordsWithDifferentValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 2 words with different values.txt',
            'powers' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many possibilities".
     *
     * @group scrabble_manyPossibilities
     */
    public function testCanExecuteManyPossibilities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - many possibilities.txt',
            'waster' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Value better than size".
     *
     * @group scrabble_valueBetterThanSize
     */
    public function testCanExecuteValueBetterThanSize(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - value better than size.txt',
            'tween' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Valid word".
     *
     * @group scrabble_validWord
     */
    public function testCanExecuteValidWord(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - valid word.txt',
            'aeiou' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large dictionary 1".
     *
     * @group scrabble_largeDictionary1
     */
    public function testCanExecuteLargeDictionary1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - large dictionary 1.txt',
            'satire' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large dictionary 2".
     *
     * @group scrabble_largeDictionary2
     */
    public function testCanExecuteLargeDictionary2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - large dictionary 2.txt',
            'pastern' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cannot use letter twice".
     *
     * @group scrabble_cannotUseLetterTwice
     */
    public function testCanExecuteCannotUseLetterTwice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - cannot use letter twice.txt',
            'powers' . PHP_EOL
        );
    }
}
