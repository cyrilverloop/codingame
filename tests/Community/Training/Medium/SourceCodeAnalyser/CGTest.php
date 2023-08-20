<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SourceCodeAnalyser;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SourceCodeAnalyser\SourceCodeAnalyser;

/**
 * Tests for the "Source code analyser" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SourceCodeAnalyser\SourceCodeAnalyser
 * @group sourceCodeAnalyser
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SourceCodeAnalyser();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group sourceCodeAnalyser_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2: one liner".
     *
     * @group sourceCodeAnalyser_test2OneLiner
     */
    public function testCanExecuteTest2OneLiner(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2: one liner.txt',
            "fscanf 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3: simple test with multiple lines, also with _ and numbers in identifiers view".
     *
     * @group sourceCodeAnalyser_test3SimpleTestWithMultipleLinesAlsoWith_AndNumbersInIdentifiersView
     */
    public function testCanExecuteTest3SimpleTestWithMultipleLinesAlsoWithAndNumbersInIdentifiersView(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3: simple test with multiple lines, also with _ and numbers in identifiers view.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3: simple test with multiple lines, also with _ and numbers in identifiers view.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4: reserved keyword is not a function call".
     *
     * @group sourceCodeAnalyser_test4ReservedKeywordIsNotAFunctionCall
     */
    public function testCanExecuteTest4ReservedKeywordIsNotAFunctionCall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4: reserved keyword is not a function call.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4: reserved keyword is not a function call.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5: single line comment".
     *
     * @group sourceCodeAnalyser_test5SingleLineComment
     */
    public function testCanExecuteTest5SingleLineComment(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5: single line comment.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5: single line comment.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 6: multi-line comment".
     *
     * @group sourceCodeAnalyser_test6MultiLineComment
     */
    public function testCanExecuteTest6MultiLineComment(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6: multi-line comment.txt',
            file_get_contents(__DIR__ . '/output/06 - test 6: multi-line comment.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 7: within a comment".
     *
     * @group sourceCodeAnalyser_test7WithinAComment
     */
    public function testCanExecuteTest7WithinAComment(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7: within a comment.txt',
            file_get_contents(__DIR__ . '/output/07 - test 7: within a comment.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 8: string literals".
     *
     * @group sourceCodeAnalyser_test8StringLiterals
     */
    public function testCanExecuteTest8StringLiterals(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8: string literals.txt',
            file_get_contents(__DIR__ . '/output/08 - test 8: string literals.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 9: mixing quotes".
     *
     * @group sourceCodeAnalyser_test9MixingQuotes
     */
    public function testCanExecuteTest9MixingQuotes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9: mixing quotes.txt',
            file_get_contents(__DIR__ . '/output/09 - test 9: mixing quotes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 10: reserved keywords".
     *
     * @group sourceCodeAnalyser_test10ReservedKeywords
     */
    public function testCanExecuteTest10ReservedKeywords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10: reserved keywords.txt',
            file_get_contents(__DIR__ . '/output/10 - test 10: reserved keywords.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 11: user defined function".
     *
     * @group sourceCodeAnalyser_test11UserDefinedFunction
     */
    public function testCanExecuteTest11UserDefinedFunction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - test 11: user defined function.txt',
            file_get_contents(__DIR__ . '/output/11 - test 11: user defined function.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 12: no function call".
     *
     * @group sourceCodeAnalyser_test12NoFunctionCall
     */
    public function testCanExecuteTest12NoFunctionCall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - test 12: no function call.txt',
            "NONE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 13: case sensitive names".
     *
     * @group sourceCodeAnalyser_test13CaseSensitiveNames
     */
    public function testCanExecuteTest13CaseSensitiveNames(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - test 13: case sensitive names.txt',
            file_get_contents(__DIR__ . '/output/13 - test 13: case sensitive names.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 14: function name from variable".
     *
     * @group sourceCodeAnalyser_test14FunctionNameFromVariable
     */
    public function testCanExecuteTest14FunctionNameFromVariable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - test 14: function name from variable.txt',
            "fscanf 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 15: multiple whitespaces".
     *
     * @group sourceCodeAnalyser_test15MultipleWhitespaces
     */
    public function testCanExecuteTest15MultipleWhitespaces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - test 15: multiple whitespaces.txt',
            file_get_contents(__DIR__ . '/output/15 - test 15: multiple whitespaces.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 16: real life example".
     *
     * @group sourceCodeAnalyser_test16RealLifeExample
     */
    public function testCanExecuteTest16RealLifeExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - test 16: real life example.txt',
            file_get_contents(__DIR__ . '/output/16 - test 16: real life example.txt')
        );
    }
}
