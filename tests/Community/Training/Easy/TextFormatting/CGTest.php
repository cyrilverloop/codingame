<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TextFormatting;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TextFormatting\TextFormatting;

/**
 * Tests for the "Text formatting" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TextFormatting\TextFormatting
 * @group textFormatting
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TextFormatting();
    }

    /**
     * Test that the code can be executed for "One sentence without spaces".
     *
     * @group textFormatting_oneSentenceWithoutSpaces
     */
    public function testCanExecuteOneSentenceWithoutSpaces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one sentence without spaces.txt',
            "One, two, three." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two sentences".
     *
     * @group textFormatting_twoSentences
     */
    public function testCanExecuteTwoSentences(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two sentences.txt',
            "One, two, three. Four, five, six." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Extra spaces".
     *
     * @group textFormatting_extraSpaces
     */
    public function testCanExecuteExtraSpaces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - extra spaces.txt',
            "One, two, three. Four, five, six." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More errors".
     *
     * @group textFormatting_moreErrors
     */
    public function testCanExecuteMoreErrors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - more errors.txt',
            "One, two, three. Four, five, six." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shakespeare".
     *
     * @group textFormatting_shakespeare
     */
    public function testCanExecuteShakespeare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - shakespeare.txt',
            "When a father gives to his son, both laugh; when a son gives to his father, both cry. Shakespeare" . PHP_EOL
        );
    }
}
