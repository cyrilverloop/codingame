<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BracketsEnhancedEdition;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BracketsEnhancedEdition\BracketsEnhancedEdition;

/**
 * Tests for the "Brackets, extended edition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BracketsEnhancedEdition\BracketsEnhancedEdition
 * @group bracketsEnhancedEdition
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BracketsEnhancedEdition();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bracketsEnhancedEdition_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Extreme".
     *
     * @group bracketsEnhancedEdition_extreme
     */
    public function testCanExecuteExtreme(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - extreme.txt',
            file_get_contents(__DIR__ . '/output/02 - extreme.txt')
        );
    }

    /**
     * Test that the code can be executed for "Unextreme at little cost".
     *
     * @group bracketsEnhancedEdition_unextremeAtLittleCost
     */
    public function testCanExecuteUnextremeAtLittleCost(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - unextreme at little cost.txt',
            file_get_contents(__DIR__ . '/output/03 - unextreme at little cost.txt')
        );
    }

    /**
     * Test that the code can be executed for "Complex expressions".
     *
     * @group bracketsEnhancedEdition_complexExpressions
     */
    public function testCanExecuteComplexExpressions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - complex expressions.txt',
            file_get_contents(__DIR__ . '/output/04 - complex expressions.txt')
        );
    }

    /**
     * Test that the code can be executed for "What's your bias?".
     *
     * @group bracketsEnhancedEdition_whatsYourBias
     */
    public function testCanExecuteWhatsYourBias(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - what\'s your bias?.txt',
            file_get_contents(__DIR__ . '/output/05 - what\'s your bias?.txt')
        );
    }

    /**
     * Test that the code can be executed for "More complex expressions".
     *
     * @group bracketsEnhancedEdition_moreComplexExpressions
     */
    public function testCanExecuteMoreComplexExpressions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - more complex expressions.txt',
            file_get_contents(__DIR__ . '/output/06 - more complex expressions.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ramp up".
     *
     * @group bracketsEnhancedEdition_rampUp
     */
    public function testCanExecuteRampUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - ramp up.txt',
            file_get_contents(__DIR__ . '/output/07 - ramp up.txt')
        );
    }

    /**
     * Test that the code can be executed for "Very complex salvageable".
     *
     * @group bracketsEnhancedEdition_veryComplexSalvageable
     */
    public function testCanExecuteVeryComplexSalvageable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - Very complex salvageable.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Very complex unsalvageable".
     *
     * @group bracketsEnhancedEdition_veryComplexUnsalvageable
     */
    public function testCanExecuteVeryComplexUnsalvageable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - Very complex unsalvageable.txt',
            "false" . PHP_EOL
        );
    }
}
