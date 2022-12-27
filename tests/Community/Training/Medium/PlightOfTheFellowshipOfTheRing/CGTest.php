<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PlightOfTheFellowshipOfTheRing;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\PlightOfTheFellowshipOfTheRing\PlightOfTheFellowshipOfTheRing;

/**
 * Tests for the "Plight of the fellowship of the ring" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PlightOfTheFellowshipOfTheRing\PlightOfTheFellowshipOfTheRing
 * @group plightOfTheFellowshipOfTheRing
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new PlightOfTheFellowshipOfTheRing();
    }

    /**
     * Test that the code can be executed for "One orc".
     *
     * @group plightOfTheFellowshipOfTheRing_oneOrc
     */
    public function testCanExecuteOneOrc(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one orc.txt',
            "0 1 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple orcs".
     *
     * @group plightOfTheFellowshipOfTheRing_multipleOrcs
     */
    public function testCanExecuteMultipleOrcs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - multiple orcs.txt',
            "0 1 3 4 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many choices".
     *
     * @group plightOfTheFellowshipOfTheRing_manyChoices
     */
    public function testCanExecuteManyChoices(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - many choices.txt',
            "0 1 2 8 9 10 11 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Impossible".
     *
     * @group plightOfTheFellowshipOfTheRing_impossible
     */
    public function testCanExecuteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - impossible.txt',
            "IMPOSSIBLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No orcs!".
     *
     * @group plightOfTheFellowshipOfTheRing_noOrcs
     */
    public function testCanExecuteNoOrcs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - no orcs!.txt',
            "0 2 3" . PHP_EOL
        );
    }
}
