<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RationalNumberTree;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RationalNumberTree\RationalNumberTree;

/**
 * Tests for the "Rational number tree" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RationalNumberTree\RationalNumberTree
 * @group rationalNumberTree
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RationalNumberTree();
    }

    /**
     * Test that the code can be executed for "Examples".
     *
     * @group rationalNumberTree_examples
     */
    public function testCanExecuteExamples(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - examples.txt',
            file_get_contents(__DIR__ . '/output/01 - examples.txt')
        );
    }

    /**
     * Test that the code can be executed for "Near the root 1".
     *
     * @group rationalNumberTree_nearTheRoot1
     */
    public function testCanExecuteNearTheRoot1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - near the root 1.txt',
            file_get_contents(__DIR__ . '/output/02 - near the root 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Near the root 2".
     *
     * @group rationalNumberTree_nearTheRoot2
     */
    public function testCanExecuteNearTheRoot2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - near the root 2.txt',
            file_get_contents(__DIR__ . '/output/03 - near the root 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Longer and Bigger".
     *
     * @group rationalNumberTree_longerAndBigger
     */
    public function testCanExecuteLongerAndBigger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - longer and bigger.txt',
            file_get_contents(__DIR__ . '/output/04 - longer and bigger.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big big numbers".
     *
     * @group rationalNumberTree_bigBigNumbers
     */
    public function testCanExecuteBigBigNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - big big numbers.txt',
            file_get_contents(__DIR__ . '/output/05 - big big numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long long path".
     *
     * @group rationalNumberTree_longLongPath
     */
    public function testCanExecuteLongLongPath(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - long long path.txt',
            file_get_contents(__DIR__ . '/output/06 - long long path.txt')
        );
    }
}
