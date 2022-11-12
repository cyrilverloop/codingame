<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HiddenWord;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\HiddenWord\HiddenWord;

/**
 * Tests for the "Hidden word" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HiddenWord\HiddenWord
 * @group hiddenWord
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new HiddenWord();
    }

    /**
     * Test that the code can be executed for "Horizontal words".
     *
     * @group hiddenWord_horizontalWords
     */
    public function testCanExecuteHorizontalWords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - horizontal words.txt',
            "RED" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Vertical words".
     *
     * @group hiddenWord_verticalWords
     */
    public function testCanExecuteVerticalWords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - vertical words.txt',
            "TIM" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All directions (small)".
     *
     * @group hiddenWord_allDirectionsSmall
     */
    public function testCanExecuteAllDirectionsSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - all directions (small).txt',
            "OK" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All directions (big)".
     *
     * @group hiddenWord_allDirectionsBig
     */
    public function testCanExecuteAllDirectionsBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - all directions (big).txt',
            "CODNGAME" . PHP_EOL
        );
    }
}
