<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\WaysToMakeChange;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\WaysToMakeChange\WaysToMakeChange;

/**
 * Tests for the "Ways to make change" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\WaysToMakeChange\WaysToMakeChange
 * @group waysToMakeChange
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new WaysToMakeChange();
    }

    /**
     * Test that the code can be executed for "Small change".
     *
     * @group waysToMakeChange_smallChange
     */
    public function testCanExecuteSmallChange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small change.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger change".
     *
     * @group waysToMakeChange_biggerChange
     */
    public function testCanExecuteBiggerChange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - bigger change.txt',
            343 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "That won't be easy !".
     *
     * @group waysToMakeChange_thatWontBeEasy
     */
    public function testCanExecuteThatWontBeEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - that won\'t be easy !.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bank notes only please".
     *
     * @group waysToMakeChange_bankNotesOnlyPlease
     */
    public function testCanExecuteBankNotesOnlyPlease(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bank notes only please.txt',
            1022 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "How am i supposed to do ?!".
     *
     * @group waysToMakeChange_howAmISupposedToDo
     */
    public function testCanExecuteHowAmISupposedToDo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - how am i supposed to do ?!.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Pushing a bit...".
     *
     * @group waysToMakeChange_pushingABit
     */
    public function testCanExecutePushingABit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - pushing a bit....txt',
            357746987 . PHP_EOL
        );
    }
}
