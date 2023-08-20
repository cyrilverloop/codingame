<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\WineFromKalbodiaEpisode1;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\WineFromKalbodiaEpisode1\WineFromKalbodiaEpisode1;

/**
 * Tests for the "Wine from Kalbodia - episode 1" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\WineFromKalbodiaEpisode1\WineFromKalbodiaEpisode1
 * @group wineFromKalbodiaEpisode1
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new WineFromKalbodiaEpisode1();
    }

    /**
     * Test that the code can be executed for "Trivial solution".
     *
     * @group wineFromKalbodiaEpisode1_trivialSolution
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - trivial solution.txt',
            file_get_contents(__DIR__ . '/output/01 - trivial solution.txt')
        );
    }

    /**
     * Test that the code can be executed for "Differing lengths".
     *
     * @group wineFromKalbodiaEpisode1_differingLengths
     */
    public function testCanExecuteDifferingLengths(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - differing lengths.txt',
            file_get_contents(__DIR__ . '/output/02 - differing lengths.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bulk orders".
     *
     * @group wineFromKalbodiaEpisode1_bulkOrders
     */
    public function testCanExecuteBulkOrders(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - bulk orders.txt',
            file_get_contents(__DIR__ . '/output/03 - bulk orders.txt')
        );
    }

    /**
     * Test that the code can be executed for "Similar languages".
     *
     * @group wineFromKalbodiaEpisode1_similarLanguages
     */
    public function testCanExecuteSimilarLanguages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - similar languages.txt',
            file_get_contents(__DIR__ . '/output/04 - similar languages.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small alphabets".
     *
     * @group wineFromKalbodiaEpisode1_smallAlphabets
     */
    public function testCanExecuteSmallAlphabets(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - small alphabets.txt',
            file_get_contents(__DIR__ . '/output/05 - small alphabets.txt')
        );
    }

    /**
     * Test that the code can be executed for "What's the likelihood?".
     *
     * @group wineFromKalbodiaEpisode1_whatsTheLikelihood
     */
    public function testCanExecuteWhatsTheLikelihood(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - What\'s the likelihood?.txt',
            file_get_contents(__DIR__ . '/output/06 - What\'s the likelihood?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wall of text".
     *
     * @group wineFromKalbodiaEpisode1_wallOfText
     */
    public function testCanExecuteWallOfText(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - wall of text.txt',
            file_get_contents(__DIR__ . '/output/07 - wall of text.txt')
        );
    }

    /**
     * Test that the code can be executed for "Completely random".
     *
     * @group wineFromKalbodiaEpisode1_completelyRandom
     */
    public function testCanExecuteCompletelyRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - completely random.txt',
            file_get_contents(__DIR__ . '/output/08 - completely random.txt')
        );
    }
}
