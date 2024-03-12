<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FoldingANote;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FoldingANote\FoldingANote;

/**
 * Tests for the "Folding a note" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FoldingANote\FoldingANote
 * @group foldingANote
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FoldingANote();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group foldingANote_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            "A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "LOL".
     *
     * @group foldingANote_LOL
     */
    public function testCanExecuteLOL(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - LOL.txt',
            "LMAO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Brooo...".
     *
     * @group foldingANote_brooo...
     */
    public function testCanExecuteBrooo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - brooo....txt',
            "Duuuuuuuuuuuude!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Piggy".
     *
     * @group foldingANote_piggy
     */
    public function testCanExecutePiggy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - piggy.txt',
            "The supervisor looks like a hog! Oink oink... I want some bacon." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I really like detention.".
     *
     * @group foldingANote_iReallyLikeDetention
     */
    public function testCanExecuteIReallyLikeDetention(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - i really like detention.txt',
            file_get_contents(__DIR__ . '/output/05 - i really like detention.txt')
        );
    }
}
