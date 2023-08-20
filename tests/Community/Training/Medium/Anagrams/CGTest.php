<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Anagrams;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Anagrams\Anagrams;

/**
 * Tests for the "Anagrams" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Anagrams\Anagrams
 * @group anagrams
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Anagrams();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group anagrams_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "END OF LINE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group anagrams_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "I KNOW KUNG FU" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group anagrams_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "IM SORRY DAVE IM AFRAID I CANT DO THAT" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group anagrams_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }
}
