<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OffsetArrays;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OffsetArrays\OffsetArrays;

/**
 * Tests for the "Offset arrays" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OffsetArrays\OffsetArrays
 * @group offsetArrays
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OffsetArrays();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group offsetArrays_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative indexing".
     *
     * @group offsetArrays_negativeIndexing
     */
    public function testCanExecuteNegativeIndexing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - negative indexing.txt',
            22 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nested".
     *
     * @group offsetArrays_nested
     */
    public function testCanExecuteNested(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - nested.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One-based".
     *
     * @group offsetArrays_oneBased
     */
    public function testCanExecuteOneBased(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - one-based.txt',
            -69 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only one element".
     *
     * @group offsetArrays_onlyOneElement
     */
    public function testCanExecuteOnlyOneElement(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - only one element.txt',
            1547 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big Offsets #1".
     *
     * @group offsetArrays_bigOffsets1
     */
    public function testCanExecuteBigOffsets1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - big offsets #1.txt',
            506 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big Offsets #2".
     *
     * @group offsetArrays_bigOffsets2
     */
    public function testCanExecuteBigOffsets2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - big offsets #2.txt',
            24184051 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Deep nesting".
     *
     * @group offsetArrays_deepNesting
     */
    public function testCanExecuteDeepNesting(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - deep nesting.txt',
            28 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complicated #1".
     *
     * @group offsetArrays_complicated1
     */
    public function testCanExecuteComplicated1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - complicated #1.txt',
            -2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complicated #2".
     *
     * @group offsetArrays_complicated2
     */
    public function testCanExecuteComplicated2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - complicated #2.txt',
            400 . PHP_EOL
        );
    }
}
