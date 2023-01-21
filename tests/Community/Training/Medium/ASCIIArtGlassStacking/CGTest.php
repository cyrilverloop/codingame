<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ASCIIArtGlassStacking;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\ASCIIArtGlassStacking\ASCIIArtGlassStacking;

/**
 * Tests for the "ASCII ART : glass stacking" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ASCIIArtGlassStacking\ASCIIArtGlassStacking
 * @group ASCIIArtGlassStacking
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ASCIIArtGlassStacking();
    }

    /**
     * Test that the code can be executed for "4 glasses".
     *
     * @group ASCIIArtGlassStacking_4Glasses
     */
    public function testCanExecute4Glasses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 4 glasses.txt',
            file_get_contents(__DIR__ . '/output/01 - 4 glasses.txt')
        );
    }

    /**
     * Test that the code can be executed for "10 glasses".
     *
     * @group ASCIIArtGlassStacking_10Glasses
     */
    public function testCanExecute10Glasses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 10 glasses.txt',
            file_get_contents(__DIR__ . '/output/02 - 10 glasses.txt')
        );
    }

    /**
     * Test that the code can be executed for "25 glasses".
     *
     * @group ASCIIArtGlassStacking_25Glasses
     */
    public function testCanExecute25Glasses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 25 glasses.txt',
            file_get_contents(__DIR__ . '/output/03 - 25 glasses.txt')
        );
    }

    /**
     * Test that the code can be executed for "A single glass".
     *
     * @group ASCIIArtGlassStacking_aSingleGlass
     */
    public function testCanExecuteASingleGlass(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - a single glass.txt',
            file_get_contents(__DIR__ . '/output/04 - a single glass.txt')
        );
    }
}
