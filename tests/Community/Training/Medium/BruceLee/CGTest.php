<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BruceLee;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BruceLee\BruceLee;

/**
 * Tests for the "Bruce lee" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BruceLee\BruceLee
 * @group bruceLee
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BruceLee();
    }

    /**
     * Test that the code can be executed for "A".
     *
     * @group bruceLee_A
     */
    public function testCanExecuteA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - A.txt',
            "A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "AA".
     *
     * @group bruceLee_AA
     */
    public function testCanExecuteAA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - AA.txt',
            "AA" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bruce lee".
     *
     * @group bruceLee_bruceLee
     */
    public function testCanExecuteBruceLee(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - bruce lee.txt',
            "Bruce Lee" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Epic message".
     *
     * @group bruceLee_epicMessage
     */
    public function testCanExecuteEpicMessage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - epic message.txt',
            "Bruce Lee vs Chuck Norris" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "This seems wrong...".
     *
     * @group bruceLee_thisSeemsWrong
     */
    public function testCanExecuteThisSeemsWrong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - this seems wrong....txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large text".
     *
     * @group bruceLee_largeText
     */
    public function testCanExecuteLargeText(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - large text.txt',
            file_get_contents(__DIR__ . '/output/06 - large text.txt')
        );
    }

    /**
     * Test that the code can be executed for "%*#0".
     *
     * @group bruceLee_pasz
     */
    public function testCanExecutePASZ(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - %*#0.txt',
            "%*#0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "This shouldn't work".
     *
     * @group bruceLee_thisShouldntWork
     */
    public function testCanExecuteThisShouldntWork(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - this shouldn\'t work.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Invalid input".
     *
     * @group bruceLee_invalidInput
     */
    public function testCanExecuteInvalidInput(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - invalid input.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Invalid input 2".
     *
     * @group bruceLee_invalidInput2
     */
    public function testCanExecuteInvalidInput2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - invalid input 2.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Invalid input 3".
     *
     * @group bruceLee_invalidInput3
     */
    public function testCanExecuteInvalidInput3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - invalid input 3.txt',
            "INVALID" . PHP_EOL
        );
    }
}
