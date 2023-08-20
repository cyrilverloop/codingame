<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\QueneauNumbers;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\QueneauNumbers\QueneauNumbers;

/**
 * Tests for the "Queneau numbers" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\QueneauNumbers\QueneauNumbers
 * @group queneauNumbers
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new QueneauNumbers();
    }

    /**
     * Test that the code can be executed for "Terine".
     *
     * @group queneauNumbers_terine
     */
    public function testCanExecuteTerine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - terine.txt',
            file_get_contents(__DIR__ . '/output/01 - terine.txt')
        );
    }

    /**
     * Test that the code can be executed for "Impossible".
     *
     * @group queneauNumbers_impossible
     */
    public function testCanExecuteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - impossible.txt',
            "IMPOSSIBLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sextine".
     *
     * @group queneauNumbers_sextine
     */
    public function testCanExecuteSextine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - sextine.txt',
            file_get_contents(__DIR__ . '/output/03 - sextine.txt')
        );
    }

    /**
     * Test that the code can be executed for "So big yet so perfect".
     *
     * @group queneauNumbers_soBigYetSoPerfect
     */
    public function testCanExecuteSoBigYetSoPerfect(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - so big yet so perfect.txt',
            file_get_contents(__DIR__ . '/output/04 - so big yet so perfect.txt')
        );
    }

    /**
     * Test that the code can be executed for "So big yet so ugly".
     *
     * @group queneauNumbers_soBigYetSoUgly
     */
    public function testCanExecuteSoBigYetSoUgly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - so big yet so ugly.txt',
            "IMPOSSIBLE" . PHP_EOL
        );
    }
}
