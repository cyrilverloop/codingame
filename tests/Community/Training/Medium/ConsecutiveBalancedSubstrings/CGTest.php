<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ConsecutiveBalancedSubstrings;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ConsecutiveBalancedSubstrings\ConsecutiveBalancedSubstrings;

/**
 * Tests for the "Consecutive balanced substrings" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ConsecutiveBalancedSubstrings\ConsecutiveBalancedSubstrings
 * @group consecutiveBalancedSubstrings
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ConsecutiveBalancedSubstrings();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group consecutiveBalancedSubstrings_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group consecutiveBalancedSubstrings_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group consecutiveBalancedSubstrings_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            45 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group consecutiveBalancedSubstrings_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            47 . PHP_EOL
        );
    }
}
