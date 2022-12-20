<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PalindromicDecomposition;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\PalindromicDecomposition\PalindromicDecomposition;

/**
 * Tests for the "Palindromic decomposition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PalindromicDecomposition\PalindromicDecomposition
 * @group palindromicDecomposition
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new PalindromicDecomposition();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group palindromicDecomposition_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small a".
     *
     * @group palindromicDecomposition_smallA
     */
    public function testCanExecuteSmallA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small a.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small aab".
     *
     * @group palindromicDecomposition_smallAab
     */
    public function testCanExecuteSmallAab(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small aab.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large a".
     *
     * @group palindromicDecomposition_largeA
     */
    public function testCanExecuteLargeA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large a.txt',
            8006001 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large aba".
     *
     * @group palindromicDecomposition_largeAba
     */
    public function testCanExecuteLargeAba(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - large aba.txt',
            890446 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large ababa".
     *
     * @group palindromicDecomposition_largeAbaba
     */
    public function testCanExecuteLargeAbaba(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - large ababa.txt',
            316412 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large aabaa".
     *
     * @group palindromicDecomposition_largeAabaa
     */
    public function testCanExecuteLargeAabaa(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - large aabaa.txt',
            319602 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large ab".
     *
     * @group palindromicDecomposition_largeAb
     */
    public function testCanExecuteLargeAb(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - large ab.txt',
            5997 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large aab".
     *
     * @group palindromicDecomposition_largeAab
     */
    public function testCanExecuteLargeAab(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - large aab.txt',
            3994 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large abba".
     *
     * @group palindromicDecomposition_largeAbba
     */
    public function testCanExecuteLargeAbba(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - large abba.txt',
            501502 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All letters".
     *
     * @group palindromicDecomposition_allLetters
     */
    public function testCanExecuteAllLetters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - all letters.txt',
            11 . PHP_EOL
        );
    }
}
