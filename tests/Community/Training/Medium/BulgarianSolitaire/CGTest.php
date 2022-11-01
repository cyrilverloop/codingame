<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BulgarianSolitaire;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BulgarianSolitaire\BulgarianSolitaire;

/**
 * Tests for the "Bulgarian solitaire" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BulgarianSolitaire\BulgarianSolitaire
 * @group bulgarianSolitaire
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BulgarianSolitaire();
    }

    /**
     * Test that the code can be executed for "1 pile".
     *
     * @group bulgarianSolitaire_1Pile
     */
    public function testCanExecute1Pile(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1 pile.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 piles".
     *
     * @group bulgarianSolitaire_3Piles
     */
    public function testCanExecute3Piles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3 piles.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large piles".
     *
     * @group bulgarianSolitaire_largePiles
     */
    public function testCanExecuteLargePiles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - large piles.txt',
            62 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Empty piles".
     *
     * @group bulgarianSolitaire_emptyPiles
     */
    public function testCanExecuteEmptyPiles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - empty piles.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many piles".
     *
     * @group bulgarianSolitaire_manyPiles
     */
    public function testCanExecuteManyPiles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - many piles.txt',
            82 . PHP_EOL
        );
    }
}
