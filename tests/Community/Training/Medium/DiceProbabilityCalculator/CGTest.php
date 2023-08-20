<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DiceProbabilityCalculator;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DiceProbabilityCalculator\DiceProbabilityCalculator;

/**
 * Tests for the "Dice probability calculator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DiceProbabilityCalculator\DiceProbabilityCalculator
 * @group diceProbabilityCalculator
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DiceProbabilityCalculator();
    }

    /**
     * Test that the code can be executed for "A die and two additions".
     *
     * @group diceProbabilityCalculator_aDieAndTwoAdditions
     */
    public function testCanExecuteADieAndTwoAdditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a die and two additions.txt',
            file_get_contents(__DIR__ . '/output/01 - a die and two additions.txt')
        );
    }

    /**
     * Test that the code can be executed for "Simple comparison".
     *
     * @group diceProbabilityCalculator_simplecomparison
     */
    public function testCanExecuteSimplecomparison(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple comparison.txt',
            "6 100.00" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Addition of two dice".
     *
     * @group diceProbabilityCalculator_additionOfTwoDice
     */
    public function testCanExecuteAdditionOfTwoDice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - addition of two dice.txt',
            file_get_contents(__DIR__ . '/output/03 - addition of two dice.txt')
        );
    }

    /**
     * Test that the code can be executed for "Comparaison with sum of dice".
     *
     * @group diceProbabilityCalculator_comparaisonWithSumOfDice
     */
    public function testCanExecuteComparaisonWithSumOfDice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - comparaison with sum of dice.txt',
            file_get_contents(__DIR__ . '/output/04 - comparaison with sum of dice.txt')
        );
    }

    /**
     * Test that the code can be executed for "Subtraction of dice".
     *
     * @group diceProbabilityCalculator_subtractionOfDice
     */
    public function testCanExecuteSubtractionOfDice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - subtraction of dice.txt',
            file_get_contents(__DIR__ . '/output/05 - subtraction of dice.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiplication of dice".
     *
     * @group diceProbabilityCalculator_multiplicationOfDice
     */
    public function testCanExecuteMultiplicationOfDice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - multiplication of dice.txt',
            file_get_contents(__DIR__ . '/output/06 - multiplication of dice.txt')
        );
    }

    /**
     * Test that the code can be executed for "FIX IT !".
     *
     * @group diceProbabilityCalculator_FIXIT
     */
    public function testCanExecuteFIXIT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - FIX IT !.txt',
            file_get_contents(__DIR__ . '/output/07 - FIX IT !.txt')
        );
    }
}
