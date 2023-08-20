<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\EnglishLengthUnitsConversion;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\EnglishLengthUnitsConversion\EnglishLengthUnitsConversion;

/**
 * Tests for the "English length units conversion" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\EnglishLengthUnitsConversion\EnglishLengthUnitsConversion
 * @group englishLengthUnitsConversion
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new EnglishLengthUnitsConversion();
    }

    /**
     * Test that the code can be executed for "Direct relations".
     *
     * @group englishLengthUnitsConversion_directRelations
     */
    public function testCanExecuteDirectRelations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - direct relations.txt',
            "1 inch = 1440 twip" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Direct relations with dead end".
     *
     * @group englishLengthUnitsConversion_directRelationsWithDeadEnd
     */
    public function testCanExecuteDirectRelationsWithDeadEnd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - direct relations with dead end.txt',
            "1440 twip = 1 inch" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "With loops".
     *
     * @group englishLengthUnitsConversion_withLoops
     */
    public function testCanExecuteWithLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - with loops.txt',
            "1440 twip = 1 inch" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Full tree".
     *
     * @group englishLengthUnitsConversion_fullTree
     */
    public function testCanExecuteFullTree(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - full tree.txt',
            "5 spindle = 12 league" . PHP_EOL
        );
    }
}
