<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BinarySearchTreeTraversal;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BinarySearchTreeTraversal\BinarySearchTreeTraversal;

/**
 * Tests for the "Binary search tree traversal" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BinarySearchTreeTraversal\BinarySearchTreeTraversal
 * @group binarySearchTreeTraversal
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BinarySearchTreeTraversal();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group binarySearchTreeTraversal_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Positive values only".
     *
     * @group binarySearchTreeTraversal_positiveValuesOnly
     */
    public function testCanExecutePositiveValuesOnly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - positive values only.txt',
            file_get_contents(__DIR__ . '/output/02 - positive values only.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small random values".
     *
     * @group binarySearchTreeTraversal_smallRandomValues
     */
    public function testCanExecuteSmallRandomValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small random values.txt',
            file_get_contents(__DIR__ . '/output/03 - small random values.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large random values".
     *
     * @group binarySearchTreeTraversal_largeRandomValues
     */
    public function testCanExecuteLargeRandomValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large random values.txt',
            file_get_contents(__DIR__ . '/output/04 - large random values.txt')
        );
    }

    /**
     * Test that the code can be executed for "More random values".
     *
     * @group binarySearchTreeTraversal_moreRandomValues
     */
    public function testCanExecuteMoreRandomValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more random values.txt',
            file_get_contents(__DIR__ . '/output/05 - more random values.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ordered values".
     *
     * @group binarySearchTreeTraversal_orderedValues
     */
    public function testCanExecuteOrderedValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - ordered values.txt',
            file_get_contents(__DIR__ . '/output/06 - ordered values.txt')
        );
    }
}
