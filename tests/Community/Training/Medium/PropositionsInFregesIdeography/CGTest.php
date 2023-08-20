<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PropositionsInFregesIdeography;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\PropositionsInFregesIdeography\PropositionsInFregesIdeography;

/**
 * Tests for the "Propositions in Frege’s ideography" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PropositionsInFregesIdeography\PropositionsInFregesIdeography
 * @group propositionsInFregesIdeography
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PropositionsInFregesIdeography();
    }

    /**
     * Test that the code can be executed for "A implies A".
     *
     * @group propositionsInFregesIdeography_AImpliesA
     */
    public function testCanExecuteAImpliesA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - A implies A.txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Formula 31 (fifth axiom)".
     *
     * @group propositionsInFregesIdeography_formula31FifthAxiom
     */
    public function testCanExecuteFormula31FifthAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - formula 31 (fifth axiom).txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A implies B".
     *
     * @group propositionsInFregesIdeography_AImpliesB
     */
    public function testCanExecuteAImpliesB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - A implies B.txt',
            "A True B False" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A nor B".
     *
     * @group propositionsInFregesIdeography_ANorB
     */
    public function testCanExecuteANorB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - A nor B.txt',
            file_get_contents(__DIR__ . '/output/04 - A nor B.txt')
        );
    }

    /**
     * Test that the code can be executed for "Formula 1 (first axiom)".
     *
     * @group propositionsInFregesIdeography_formula1FirstAxiom
     */
    public function testCanExecuteFormula1FirstAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - formula 1 (first axiom).txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Formula 2 (second axiom)".
     *
     * @group propositionsInFregesIdeography_formula2SecondAxiom
     */
    public function testCanExecuteFormula2SecondAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - formula 2 (second axiom).txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Formula 8 (third axiom)".
     *
     * @group propositionsInFregesIdeography_formula8ThirdAxiom
     */
    public function testCanExecuteFormula8ThirdAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - formula 8 (third axiom).txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Formula 28 (fourth axiom)".
     *
     * @group propositionsInFregesIdeography_formula28FourthAxiom
     */
    public function testCanExecuteFormula28FourthAxiom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - formula 28 (fourth axiom).txt',
            "TAUTOLOGY" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "(C and B) implies A is not a tautology".
     *
     * @group propositionsInFregesIdeography_CAndBImpliesAIsNotATautology
     */
    public function testCanExecuteCAndBImpliesAIsNotATautology(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - (C and B) implies A is not a tautology.txt',
            "A False B True C True" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "[(C and B) implies A] implies [(C implies B) implies A] is not a tautology".
     *
     * @group propositionsInFregesIdeography_CAndBImpliesAImpliesCImpliesBImpliesAIsNotATautology
     */
    public function testCanExecuteCAndBImpliesAImpliesCImpliesBImpliesAIsNotATautology(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - [(C and B) implies A] implies [(C implies B) implies A] is not a tautology.txt',
            file_get_contents(__DIR__ . '/output/10 - [(C and B) implies A] implies [(C implies B) implies A] is not a tautology.txt')
        );
    }
}
