<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\NearPalindromes;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\NearPalindromes\NearPalindromes;

/**
 * Tests for the "Near-palindromes" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\NearPalindromes\NearPalindromes
 * @group nearPalindromes
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NearPalindromes();
    }

    /**
     * Test that the code can be executed for "Near-palindrome".
     *
     * @group oneWayCity_nearPalindrome
     */
    public function testCanExecuteNearPalindrome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - near-palindrome.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Non-near-palindrome".
     *
     * @group oneWayCity_nonNearPalindrome
     */
    public function testCanExecuteNonNearPalindrome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - non-near-palindrome.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple words".
     *
     * @group oneWayCity_multipleWords
     */
    public function testCanExecuteMultipleWords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple words.txt',
            file_get_contents(__DIR__ . '/output/03 - multiple words.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big word".
     *
     * @group oneWayCity_bigWord
     */
    public function testCanExecuteBigWord(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big word.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "River?".
     *
     * @group oneWayCity_river?
     */
    public function testCanExecuteRiver(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - river?.txt',
            file_get_contents(__DIR__ . '/output/05 - river?.txt')
        );
    }
}
