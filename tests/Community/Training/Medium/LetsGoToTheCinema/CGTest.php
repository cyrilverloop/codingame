<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LetsGoToTheCinema;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LetsGoToTheCinema\LetsGoToTheCinema;

/**
 * Tests for the "Let's go to the cinema!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LetsGoToTheCinema\LetsGoToTheCinema
 * @group letsGoToTheCinema
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LetsGoToTheCinema();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group letsGoToTheCinema_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "2 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Family comes to living room to watch TV".
     *
     * @group letsGoToTheCinema_familyComesToLivingRoomToWatchTV
     */
    public function testCanExecuteFamilyComesToLivingRoomToWatchTV(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - family comes to living room to watch tv.txt',
            "1 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Family TV, but cat is sitting on edge of sofa".
     *
     * @group letsGoToTheCinema_familyTVButCatIsSittingOnEdgeOfSofa
     */
    public function testCanExecuteFamilyTVButCatIsSittingOnEdgeOfSofa(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - family TV, but cat is sitting on edge of sofa.txt',
            "1 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Family TV, but 2 cats are sitting on middle of sofa".
     *
     * @group letsGoToTheCinema_familyTVBut2CatsAreSittingOnMiddleOfSofa
     */
    public function testCanExecuteFamilyTVBut2CatsAreSittingOnMiddleOfSofa(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - family TV, but 2 cats are sitting on middle of sofa.txt',
            "2 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "There ain't no problem!".
     *
     * @group letsGoToTheCinema_thereAintNoProblem
     */
    public function testCanExecuteThereAintNoProblem(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - there ain\'t no problem!.txt',
            "7 18" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "We ain't need no seat numbering!".
     *
     * @group letsGoToTheCinema_weAintNeedNoSeatNumbering
     */
    public function testCanExecuteWeAintNeedNoSeatNumbering(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - we ain\'t need no seat numbering!.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small cinema".
     *
     * @group letsGoToTheCinema_smallCinema
     */
    public function testCanExecuteSmallCinema(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - small cinema.txt',
            "9 75" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger cinema".
     *
     * @group letsGoToTheCinema_biggerCinema
     */
    public function testCanExecuteBiggerCinema(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - bigger cinema.txt',
            "66 2043" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Chain reaction".
     *
     * @group letsGoToTheCinema_chainReaction
     */
    public function testCanExecuteChainReaction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - chain reaction.txt',
            "1 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Blind date".
     *
     * @group letsGoToTheCinema_blindDate
     */
    public function testCanExecuteBlindDate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - blind date.txt',
            "8 12" . PHP_EOL
        );
    }
}
