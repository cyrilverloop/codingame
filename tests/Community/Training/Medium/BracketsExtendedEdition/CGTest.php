<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BracketsExtendedEdition;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BracketsExtendedEdition\BracketsExtendedEdition;

/**
 * Tests for the "Brackets, extended edition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BracketsExtendedEdition\BracketsExtendedEdition
 * @group bracketsExtendedEdition
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BracketsExtendedEdition();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bracketsExtendedEdition_example
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
     * @group bracketsExtendedEdition_extreme
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
     * @group bracketsExtendedEdition_unextremeAtLittleCost
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
     * @group bracketsExtendedEdition_complexExpressions
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
     * @group bracketsExtendedEdition_whatsYourBias
     */
    public function testCanExecuteWhatsYourBias(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - what\'s your bias?.txt',
            file_get_contents(__DIR__ . '/output/05 - what\'s your bias?.txt')
        );
    }
}
