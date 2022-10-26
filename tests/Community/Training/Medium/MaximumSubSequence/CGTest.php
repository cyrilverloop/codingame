<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MaximumSubSequence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\MaximumSubSequence\MaximumSubSequence;

/**
 * Tests for the "Maximum sub-sequence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MaximumSubSequence\MaximumSubSequence
 * @group maximumSubSequence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MaximumSubSequence();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group maximumSubSequence_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            "0 1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger Ik".
     *
     * @group maximumSubSequence_biggerIk
     */
    public function testCanExecuteBiggerIk(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - bigger Ik.txt',
            "999 1000 1001 1002 1003 1004 1005" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two choices".
     *
     * @group maximumSubSequence_twoChoices
     */
    public function testCanExecuteTwoChoices(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - two choices.txt',
            "0 1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Even bigger Ik".
     *
     * @group maximumSubSequence_evenBiggerIk
     */
    public function testCanExecuteEvenBiggerIk(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - even bigger Ik.txt',
            file_get_contents(__DIR__ . '/output/04 - even bigger Ik.txt')
        );
    }
}
