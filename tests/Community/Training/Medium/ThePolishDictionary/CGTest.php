<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ThePolishDictionary;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ThePolishDictionary\ThePolishDictionary;

/**
 * Tests for the "The polish dictionary" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ThePolishDictionary\ThePolishDictionary
 * @group thePolishDictionary
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ThePolishDictionary();
    }

    /**
     * Test that the code can be executed for "Simple Test".
     *
     * @group ThePolishDictionary_simpleTest
     */
    public function testCanExecuteSimpleTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple test.txt',
            "5 + 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No parentheses needed".
     *
     * @group ThePolishDictionary_noParenthesesNeeded
     */
    public function testCanExecuteNoParenthesesNeeded(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no parentheses needed.txt',
            "6 + 7 * 8" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple parentheses".
     *
     * @group ThePolishDictionary_simpleParentheses
     */
    public function testCanExecuteSimpleParentheses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - simple parentheses.txt',
            "6 - (7 + 8)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple layers".
     *
     * @group ThePolishDictionary_multipleLayers
     */
    public function testCanExecuteMultipleLayers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiple layers.txt',
            "(5 + 3) * 10 + 8 + 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parentheses inisde other parentheses".
     *
     * @group ThePolishDictionary_parenthesesInisdeOtherParentheses
     */
    public function testCanExecuteParenthesesInisdeOtherParentheses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - parentheses inisde other parentheses.txt',
            "1 * ((8 + 6) * (3 - 4) * 2 + 5 + 5)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Variables".
     *
     * @group ThePolishDictionary_variables
     */
    public function testCanExecuteVariables(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - variables.txt',
            "apple * (3 + x)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tree divisions".
     *
     * @group ThePolishDictionary_treeDivisions
     */
    public function testCanExecuteTreeDivisions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - tree divisions.txt',
            "a / b / (c / d)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big test".
     *
     * @group thePolishDictionary_bigTest
     */
    public function testCanExecuteBigTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - big test.txt',
            file_get_contents(__DIR__ . '/output/08 - big test.txt')
        );
    }
}
