<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RectangularBlockSpinner;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\RectangularBlockSpinner\RectangularBlockSpinner;

/**
 * Tests for the "Rectangular block spinner" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RectangularBlockSpinner\RectangularBlockSpinner
 * @group rectangularBlockSpinner
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RectangularBlockSpinner();
    }

    /**
     * Test that the code can be executed for "Shine bright like a dimond".
     *
     * @group rectangularBlockSpinner_shineBrightLikeADimond
     */
    public function testCanExecuteShineBrightLikeADimond(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - shine bright like a dimond.txt',
            file_get_contents(__DIR__ . '/output/01 - shine bright like a dimond.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small random 1".
     *
     * @group rectangularBlockSpinner_smallRandom1
     */
    public function testCanExecuteSmallRandom1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small random 1.txt',
            file_get_contents(__DIR__ . '/output/02 - small random 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small random 2".
     *
     * @group rectangularBlockSpinner_smallRandom2
     */
    public function testCanExecuteSmallRandom2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small random 2.txt',
            file_get_contents(__DIR__ . '/output/03 - small random 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large random".
     *
     * @group rectangularBlockSpinner_largeRandom
     */
    public function testCanExecuteLargeRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large random.txt',
            file_get_contents(__DIR__ . '/output/04 - large random.txt')
        );
    }
}
