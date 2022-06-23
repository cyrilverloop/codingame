<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\FaroShuffle;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\FaroShuffle\FaroShuffle;

/**
 * Tests for the "Faro shuffle" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\FaroShuffle\FaroShuffle
 * @group faroShuffle
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new FaroShuffle();
    }

    /**
     * Test that the code can be executed for "Aces".
     *
     * @group faroShuffle_aces
     */
    public function testCanExecuteAces(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - aces.txt',
            "AS AD AH AC" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Odd number of cards".
     *
     * @group faroShuffle_oddNumberOfCards
     */
    public function testCanExecuteOddNumberOfCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - odd number of cards.txt',
            "2S JH 5D JD QH 5S 3S KH 4S" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple shuffles".
     *
     * @group faroShuffle_multipleShuffles
     */
    public function testCanExecuteMultipleShuffles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple shuffles.txt',
            "KS 8S 5S QH 5H 9D 6D AH KD KH AS 7H 3S 5D QS 4S JH KC 5C JS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fresh deck".
     *
     * @group faroShuffle_freshDeck
     */
    public function testCanExecuteFreshDeck(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - fresh deck.txt',
            file_get_contents(__DIR__ . '/output/04 - fresh deck.txt')
        );
    }
}
