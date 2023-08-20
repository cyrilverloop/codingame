<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ArtificialEmotionalIntelligence;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ArtificialEmotionalIntelligence\ArtificialEmotionalIntelligence;

/**
 * Tests for the "Artificial emotional intelligence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ArtificialEmotionalIntelligence\ArtificialEmotionalIntelligence
 * @group artificialEmotionalIntelligence
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ArtificialEmotionalIntelligence();
    }

    /**
     * Test that the code can be executed for "Simple case".
     *
     * @group artificialEmotionalIntelligence_simpleCase
     */
    public function testCanExecuteSimpleCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple case.txt',
            file_get_contents(__DIR__ . '/output/01 - simple case.txt')
        );
    }

    /**
     * Test that the code can be executed for "Repeating letters and space".
     *
     * @group artificialEmotionalIntelligence_repeatingLettersAndSpace
     */
    public function testCanExecuteRepeatingLettersAndSpace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - repeating letters and space.txt',
            file_get_contents(__DIR__ . '/output/02 - repeating letters and space.txt')
        );
    }

    /**
     * Test that the code can be executed for "With hyphen and period".
     *
     * @group artificialEmotionalIntelligence_withHyphenAndPeriod
     */
    public function testCanExecuteWithHyphenAndPeriod(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - with hyphen and period.txt',
            file_get_contents(__DIR__ . '/output/03 - with hyphen and period.txt')
        );
    }

    /**
     * Test that the code can be executed for "Symbols and numbers".
     *
     * @group artificialEmotionalIntelligence_symbolsAndNumbers
     */
    public function testCanExecuteSymbolsAndNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - symbols and numbers.txt',
            file_get_contents(__DIR__ . '/output/04 - symbols and numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "You are not enough".
     *
     * @group artificialEmotionalIntelligence_youAreNotEnough
     */
    public function testCanExecuteYouAreNotEnough(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - you are not enough.txt',
            "Hello Libby." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "With 'Y' and 'Z'".
     *
     * @group artificialEmotionalIntelligence_withYAndZ
     */
    public function testCanExecuteWithYAndZ(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - with Y and Z.txt',
            file_get_contents(__DIR__ . '/output/06 - with Y and Z.txt')
        );
    }
}
