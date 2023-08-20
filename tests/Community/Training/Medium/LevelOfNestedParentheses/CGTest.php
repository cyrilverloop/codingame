<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LevelOfNestedParentheses;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LevelOfNestedParentheses\LevelOfNestedParentheses;

/**
 * Tests for the "Level of nested parentheses" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LevelOfNestedParentheses\LevelOfNestedParentheses
 * @group levelOfNestedParentheses
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LevelOfNestedParentheses();
    }

    /**
     * Test that the code can be executed for "Only one level".
     *
     * @group levelOfNestedParentheses_onlyOneLevel
     */
    public function testCanExecuteOnlyOneLevel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - only one level.txt',
            file_get_contents(__DIR__ . '/output/01 - only one level.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two levels".
     *
     * @group levelOfNestedParentheses_twoLevels
     */
    public function testCanExecuteTwoLevels(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two levels.txt',
            file_get_contents(__DIR__ . '/output/02 - two levels.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two levels, unbalanced".
     *
     * @group levelOfNestedParentheses_twoLevelsUnbalanced
     */
    public function testCanExecuteTwoLevelsUnbalanced(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - two levels, unbalanced.txt',
            file_get_contents(__DIR__ . '/output/03 - two levels, unbalanced.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lisp".
     *
     * @group levelOfNestedParentheses_lisp
     */
    public function testCanExecuteLisp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - lisp.txt',
            file_get_contents(__DIR__ . '/output/04 - lisp.txt')
        );
    }

    /**
     * Test that the code can be executed for "No parenthesis".
     *
     * @group levelOfNestedParentheses_noParenthesis
     */
    public function testCanExecuteNoParenthesis(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - no parenthesis.txt',
            file_get_contents(__DIR__ . '/output/05 - no parenthesis.txt')
        );
    }
}
