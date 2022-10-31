<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CardsCastle;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\CardsCastle\CardsCastle;

/**
 * Tests for the "Cards castle" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CardsCastle\CardsCastle
 * @group cardsCastle
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CardsCastle();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group cardsCastle_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Little castle".
     *
     * @group cardsCastle_littleCastle
     */
    public function testCanExecuteLittleCastle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - little castle.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Little fallen castle".
     *
     * @group cardsCastle_littleFallenCastle
     */
    public function testCanExecuteLittleFallenCastle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - little fallen castle.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fortress".
     *
     * @group cardsCastle_fortress
     */
    public function testCanExecuteFortress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - fortress.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fallen fortress".
     *
     * @group cardsCastle_fallenFortress
     */
    public function testCanExecuteFallenFortress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - fallen fortress.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cards are missing ?".
     *
     * @group cardsCastle_cardsAreMissing
     */
    public function testCanExecuteCardsAreMissing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - cards are missing ?.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A lot of cards are missing ?!".
     *
     * @group cardsCastle_aLotOfCardsAreMissing
     */
    public function testCanExecuteALotOfCardsAreMissing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - a lot of cards are missing ?!.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unstable single card".
     *
     * @group cardsCastle_unstableSingleCard
     */
    public function testCanExecuteUnstableSingleCard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - unstable single card.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Flying cards".
     *
     * @group cardsCastle_flyingCards
     */
    public function testCanExecuteFlyingCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - flying cards.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reversed cards".
     *
     * @group cardsCastle_reversedCards
     */
    public function testCanExecuteReversedCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - reversed cards.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Few floors".
     *
     * @group cardsCastle_fewFloors
     */
    public function testCanExecuteFewFloors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - few floors.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "On the gap".
     *
     * @group cardsCastle_onTheGap
     */
    public function testCanExecuteOnTheGap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - on the gap.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Starting on".
     *
     * @group cardsCastle_startingOn
     */
    public function testCanExecuteStartingOn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - starting on.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shifted".
     *
     * @group cardsCastle_shifted
     */
    public function testCanExecuteShifted(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - shifted.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Flying castle cards".
     *
     * @group cardsCastle_flyingCastleCards
     */
    public function testCanExecuteFlyingCastleCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - flying castle cards.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same card side by side".
     *
     * @group cardsCastle_sameCardSideBySide
     */
    public function testCanExecuteSameCardSideBySide(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - same card side by side.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same flying card side by side".
     *
     * @group cardsCastle_sameFlyingCardSideBySide
     */
    public function testCanExecuteSameFlyingCardSideBySide(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - same flying card side by side.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Flying reversed card side by side".
     *
     * @group cardsCastle_flyingReversedCardSideBySide
     */
    public function testCanExecuteFlyingReversedCardSideBySide(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - flying reversed card side by side.txt',
            "UNSTABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The shifted unique one".
     *
     * @group cardsCastle_theShiftedUniqueOne
     */
    public function testCanExecuteTheShiftedUniqueOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/19 - the shifted unique one.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lost cards".
     *
     * @group cardsCastle_lostCards
     */
    public function testCanExecuteLostCards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/20 - lost cards.txt',
            "STABLE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex".
     *
     * @group cardsCastle_complex
     */
    public function testCanExecuteComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/21 - complex.txt',
            "STABLE" . PHP_EOL
        );
    }
}
