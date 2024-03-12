<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FunWithSetTheory;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FunWithSetTheory\FunWithSetTheory;

/**
 * Tests for the "Fun with set theory" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FunWithSetTheory\FunWithSetTheory
 * @group funWithSetTheory
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FunWithSetTheory();
    }

    /**
     * Test that the code can be executed for "With braces".
     *
     * @group funWithSetTheory_withBraces
     */
    public function testCanExecuteWithBraces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - with braces.txt',
            "1 2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "With brackets".
     *
     * @group funWithSetTheory_withBrackets
     */
    public function testCanExecuteWithBrackets(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - with brackets.txt',
            "4 5 6 7 8 9" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple union".
     *
     * @group funWithSetTheory_simpleUnion
     */
    public function testCanExecuteSimpleUnion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - simple union.txt',
            "0 1 2 3 4 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple unions".
     *
     * @group funWithSetTheory_multipleUnions
     */
    public function testCanExecuteMultipleUnions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiple unions.txt',
            "-2 -1 0 1 2 3 4 5 10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple intersection".
     *
     * @group funWithSetTheory_simpleIntersection
     */
    public function testCanExecuteSimpleIntersection(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - simple intersection.txt',
            "4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple intersections".
     *
     * @group funWithSetTheory_multipleIntersections
     */
    public function testCanExecuteMultipleIntersections(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - multiple intersections.txt',
            "EMPTY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple difference".
     *
     * @group funWithSetTheory_simpleDifference
     */
    public function testCanExecuteSimpleDifference(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - simple difference.txt',
            "1 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple differences".
     *
     * @group funWithSetTheory_multipleDifferences
     */
    public function testCanExecuteMultipleDifferences(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - multiple differences.txt',
            "5 6 7 8 10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Braces and brackets".
     *
     * @group funWithSetTheory_bracesAndBrackets
     */
    public function testCanExecuteBracesAndBrackets(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - braces and brackets.txt',
            "8 16 20 24" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Empty set".
     *
     * @group funWithSetTheory_emptySet
     */
    public function testCanExecuteEmptySet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - empty set.txt',
            "EMPTY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative numbers".
     *
     * @group funWithSetTheory_negativeNumbers
     */
    public function testCanExecuteNegativeNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - negative numbers.txt',
            "-5 -2 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Orientation of brackets".
     *
     * @group funWithSetTheory_orientationOfBrackets
     */
    public function testCanExecuteOrientationOfBrackets(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - orientation of brackets.txt',
            "0 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple parentheses".
     *
     * @group funWithSetTheory_simpleParentheses
     */
    public function testCanExecuteSimpleParentheses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - simple parentheses.txt',
            "40 41 46 47 48 49 50" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nested parentheses".
     *
     * @group funWithSetTheory_nestedParentheses
     */
    public function testCanExecuteNestedParentheses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - nested parentheses.txt',
            "46 47 48 49 50" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Everything!".
     *
     * @group funWithSetTheory_everything
     */
    public function testCanExecuteEverything(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - everything!.txt',
            "6 7 8 9" . PHP_EOL
        );
    }
}
