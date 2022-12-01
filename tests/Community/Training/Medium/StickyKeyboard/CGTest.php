<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\StickyKeyboard;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\StickyKeyboard\StickyKeyboard;

/**
 * Tests for the "Sticky keyboard" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\StickyKeyboard\StickyKeyboard
 * @group stickyKeyboard
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new StickyKeyboard();
    }

    /**
     * Test that the code can be executed for "If it aint broke".
     *
     * @group stickyKeyboard_ifItAintBroke
     */
    public function testCanExecuteIfItAintBroke(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - if it aint broke.txt',
            "dont fix it" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One repeat letterr".
     *
     * @group stickyKeyboard_oneRepeatLetterr
     */
    public function testCanExecuteOneRepeatLetterr(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one repeat letterr.txt',
            "if you dont succeed try again, try again, then try again!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Repeat earlier".
     *
     * @group stickyKeyboard_repeatEarlier
     */
    public function testCanExecuteRepeatEarlier(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - repeat earlier.txt',
            file_get_contents(__DIR__ . '/output/03 - repeat earlier.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dropped letters".
     *
     * @group stickyKeyboard_droppedLetters
     */
    public function testCanExecuteDroppedLetters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - dropped letters.txt',
            file_get_contents(__DIR__ . '/output/04 - dropped letters.txt')
        );
    }

    /**
     * Test that the code can be executed for "So much stickiness".
     *
     * @group stickyKeyboard_soMuchStickiness
     */
    public function testCanExecuteSoMuchStickiness(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - so much stickiness.txt',
            file_get_contents(__DIR__ . '/output/05 - so much stickiness.txt')
        );
    }

    /**
     * Test that the code can be executed for "Zorbishian Alien Language".
     *
     * @group stickyKeyboard_zorbishianAlienLanguage
     */
    public function testCanExecuteZorbishianAlienLanguage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - zorbishian alien language.txt',
            file_get_contents(__DIR__ . '/output/06 - zorbishian alien language.txt')
        );
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group stickyKeyboard_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - example.txt',
            file_get_contents(__DIR__ . '/output/07 - example.txt')
        );
    }
}
