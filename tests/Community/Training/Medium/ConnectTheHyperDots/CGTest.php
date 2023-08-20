<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ConnectTheHyperDots;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ConnectTheHyperDots\ConnectTheHyperDots;

/**
 * Tests for the "Connect the hyper-dots" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ConnectTheHyperDots\ConnectTheHyperDots
 * @group connectTheHyperDots
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ConnectTheHyperDots();
    }

    /**
     * Test that the code can be executed for "2D".
     *
     * @group connectTheHyperDots_2D
     */
    public function testCanExecute2D(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2D.txt',
            "flat" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3D".
     *
     * @group connectTheHyperDots_3D
     */
    public function testCanExecute3D(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3D.txt',
            "volume" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4D".
     *
     * @group connectTheHyperDots_4D
     */
    public function testCanExecute4D(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 4D.txt',
            "hyper" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Duplicate labels".
     *
     * @group connectTheHyperDots_duplicateLabels
     */
    public function testCanExecuteDuplicateLabels(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - duplicate labels.txt',
            "repeat" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Duplicate points".
     *
     * @group connectTheHyperDots_duplicatePoints
     */
    public function testCanExecuteDuplicatePoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - duplicate points.txt',
            "helllllo" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Punctuation".
     *
     * @group connectTheHyperDots_punctuation
     */
    public function testCanExecutePunctuation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - punctuation.txt',
            "Great!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Spacing".
     *
     * @group connectTheHyperDots_spacing
     */
    public function testCanExecuteSpacing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - spacing.txt',
            "unalike words" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quotes".
     *
     * @group connectTheHyperDots_quotes
     */
    public function testCanExecuteQuotes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - quotes.txt',
            'some "scare quote" usage' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hyphenation".
     *
     * @group connectTheHyperDots_hyphenation
     */
    public function testCanExecuteHyphenation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - hyphenation.txt',
            "franken-word" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unordered orthants".
     *
     * @group connectTheHyperDots_unorderedOrthants
     */
    public function testCanExecuteUnorderedOrthants(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - unordered orthants.txt',
            "criss-cross, apple sauce" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5D".
     *
     * @group connectTheHyperDots_5D
     */
    public function testCanExecute5D(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - 5D.txt',
            "Way to go! :D" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "8D".
     *
     * @group connectTheHyperDots_8D
     */
    public function testCanExecute8D(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - 8D.txt',
            "This is getting crazy. >:)" . PHP_EOL
        );
    }
}
