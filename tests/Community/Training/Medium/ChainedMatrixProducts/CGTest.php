<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ChainedMatrixProducts;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ChainedMatrixProducts\ChainedMatrixProducts;

/**
 * Tests for the "Chained matrix products" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ChainedMatrixProducts\ChainedMatrixProducts
 * @group chainedMatrixProducts
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ChainedMatrixProducts();
    }

    /**
     * Test that the code can be executed for "N = 3".
     *
     * @group chainedMatrixProducts_N3
     */
    public function testCanExecuteN3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - N = 3.txt',
            45000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N = 6".
     *
     * @group chainedMatrixProducts_N6
     */
    public function testCanExecuteN6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - N = 6.txt',
            2228 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N = 20".
     *
     * @group chainedMatrixProducts_N20
     */
    public function testCanExecuteN20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - N = 20.txt',
            12506 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N = 100".
     *
     * @group chainedMatrixProducts_N100
     */
    public function testCanExecuteN100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - N = 100.txt',
            143838 . PHP_EOL
        );
    }
}
