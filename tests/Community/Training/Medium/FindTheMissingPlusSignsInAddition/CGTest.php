<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FindTheMissingPlusSignsInAddition;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FindTheMissingPlusSignsInAddition\FindTheMissingPlusSignsInAddition;

/**
 * Tests for the "Find the missing plus signs in addition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FindTheMissingPlusSignsInAddition\FindTheMissingPlusSignsInAddition
 * @group findTheMissingPlusSignsInAddition
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FindTheMissingPlusSignsInAddition();
    }

    /**
     * Test that the code can be executed for "Example with unique solution".
     *
     * @group findTheMissingPlusSignsInAddition_exampleWithUniqueSolution
     */
    public function testCanExecuteExampleWithUniqueSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example with unique solution.txt',
            "44+133=177" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No solution there".
     *
     * @group findTheMissingPlusSignsInAddition_noSolutionThere
     */
    public function testCanExecuteNoSolutionThere(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no solution there.txt',
            "No solution" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More than one solution".
     *
     * @group findTheMissingPlusSignsInAddition_moreThanOneSolution
     */
    public function testCanExecuteMoreThanOneSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more than one solution.txt',
            file_get_contents(__DIR__ . '/output/03 - more than one solution.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ten terms".
     *
     * @group findTheMissingPlusSignsInAddition_tenTerms
     */
    public function testCanExecuteTenTerms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - ten terms.txt',
            "48+113+19+189+25+37+72+81+212+17=813" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "59 digits in O".
     *
     * @group findTheMissingPlusSignsInAddition_59DigitsInO
     */
    public function testCanExecute59DigitsInO(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 59 digits in O.txt',
            "964510623+54170+987541234+7772451+246+94514215+159874623+432158796=2646426358" . PHP_EOL
        );
    }
}
