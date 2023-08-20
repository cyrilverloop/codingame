<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DominoPuzzle;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DominoPuzzle\DominoPuzzle;

/**
 * Tests for the "Domino puzzle" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DominoPuzzle\DominoPuzzle
 * @group dominoPuzzle
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DominoPuzzle();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group dominoPuzzle_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group dominoPuzzle_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "ClearOut".
     *
     * @group dominoPuzzle_clearOut
     */
    public function testCanExecuteClearOut(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - clearOut.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big field".
     *
     * @group dominoPuzzle_bigField
     */
    public function testCanExecuteBigField(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big field.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Huge field".
     *
     * @group dominoPuzzle_hugeField
     */
    public function testCanExecuteHugeField(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - huge field.txt',
            75 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Circle".
     *
     * @group dominoPuzzle_circle
     */
    public function testCanExecuteCircle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - circle.txt',
            1 . PHP_EOL
        );
    }
}
