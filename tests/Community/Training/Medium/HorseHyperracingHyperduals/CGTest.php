<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HorseHyperracingHyperduals;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\HorseHyperracingHyperduals\HorseHyperracingHyperduals;

/**
 * Tests for the "Horse-hyperracing hyperduals" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HorseHyperracingHyperduals\HorseHyperracingHyperduals
 * @group horseHyperracingHyperduals
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HorseHyperracingHyperduals();
    }

    /**
     * Test that the code can be executed for "Check your LCG".
     *
     * @group horseHyperracingHyperduals_checkYourLCG
     */
    public function testCanExecuteCheckYourLCG(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - check your LCG.txt',
            1372193593 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2D horses".
     *
     * @group horseHyperracingHyperduals_2DHorses
     */
    public function testCanExecute2DHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 2D horses.txt',
            345805 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A fistful of horses".
     *
     * @group horseHyperracingHyperduals_aFistfulOfHorses
     */
    public function testCanExecuteAFistfulOfHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a fistful of horses.txt',
            97225 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "For a few horse more".
     *
     * @group horseHyperracingHyperduals_forAFewHorseMore
     */
    public function testCanExecuteForAFewHorseMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - for a few horse more.txt',
            35608 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All your horse are belong to us".
     *
     * @group horseHyperracingHyperduals_allYourHorseAreBelongToUs
     */
    public function testCanExecuteAllYourHorseAreBelongToUs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - all your horse are belong to us.txt',
            33322 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many horses".
     *
     * @group horseHyperracingHyperduals_manyHorses
     */
    public function testCanExecuteManyHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - many horses.txt',
            1293 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More horse".
     *
     * @group horseHyperracingHyperduals_moreHorse
     */
    public function testCanExecuteMoreHorse(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - more horse.txt',
            4748656 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Horse OVER 9000!".
     *
     * @group horseHyperracingHyperduals_horseOVER9000
     */
    public function testCanExecuteHorseOVER9000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - horse OVER 9000!.txt',
            225840 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Horse overflow".
     *
     * @group horseHyperracingHyperduals_horseOverflow
     */
    public function testCanExecuteHorseOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - horse overflow.txt',
            75280 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Can't leave racers sitting horizontally".
     *
     * @group horseHyperracingHyperduals_cantLeaveRacersSittingHorizontally
     */
    public function testCanExecuteCantLeaveRacersSittingHorizontally(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - can\'t leave racers sitting horizontally.txt',
            1713883 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Can't leave racers sitting vertically either".
     *
     * @group horseHyperracingHyperduals_cantLeaveRacersSittingVerticallyEither
     */
    public function testCanExecuteCantLeaveRacersSittingVerticallyEither(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - can\'t leave racers sitting vertically either.txt',
            1713883 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Peak zexion".
     *
     * @group horseHyperracingHyperduals_peakZexion
     */
    public function testCanExecutePeakZexion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - peak zexion.txt',
            75242 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Roll JBM".
     *
     * @group horseHyperracingHyperduals_rollJBM
     */
    public function testCanExecuteRollJBM(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - roll JBM.txt',
            75279 . PHP_EOL
        );
    }
}
