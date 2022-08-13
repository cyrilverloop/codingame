<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\EntryCode;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\EntryCode\EntryCode;

/**
 * Tests for the "Entry code" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\EntryCode\EntryCode
 * @group entryCode
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new EntryCode();
    }

    /**
     * Test that the code can be executed for "Small 1".
     *
     * @group entryCode_small1
     */
    public function testCanExecuteSmall1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small 1.txt',
            "0001011100" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small 2".
     *
     * @group entryCode_small2
     */
    public function testCanExecuteSmall2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small 2.txt',
            "0010211220" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "High number of digits".
     *
     * @group entryCode_highNumberOfDigits
     */
    public function testCanExecuteHighNumberOfDigits(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - high number of digits.txt',
            file_get_contents(__DIR__ . '/output/03 - high number of digits.txt')
        );
    }

    /**
     * Test that the code can be executed for "High number of characters".
     *
     * @group entryCode_highNumberOfCharacters
     */
    public function testCanExecuteHighNumberOfCharacters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - high number of characters.txt',
            file_get_contents(__DIR__ . '/output/04 - high number of characters.txt')
        );
    }

    /**
     * Test that the code can be executed for "Last test".
     *
     * @group entryCode_lastTest
     */
    public function testCanExecuteLastTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - last test.txt',
            file_get_contents(__DIR__ . '/output/05 - last test.txt')
        );
    }
}
