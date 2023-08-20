<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HorseRacingHyperduals;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\HorseRacingHyperduals\HorseRacingHyperduals;

/**
 * Tests for the "Horse-racing hyperduals" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HorseRacingHyperduals\HorseRacingHyperduals
 * @group horseRacingHyperduals
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HorseRacingHyperduals();
    }

    /**
     * Test that the code can be executed for "Velocity-centric race".
     *
     * @group horseRacingHyperduals_velocityCentricRace
     */
    public function testCanExecuteVelocityCentricRace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - velocity-centric race.txt',
            4492 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Elegance-centric race".
     *
     * @group horseRacingHyperduals_eleganceCentricRace
     */
    public function testCanExecuteEleganceCentricRace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - elegance-centric race.txt',
            98020 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Balanced horses".
     *
     * @group horseRacingHyperduals_balancedHorses
     */
    public function testCanExecuteBalancedHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - balanced horses.txt',
            107044 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Linear horses".
     *
     * @group horseRacingHyperduals_linearHorses
     */
    public function testCanExecuteLinearHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - linear horses.txt',
            29220 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Affine horses".
     *
     * @group horseRacingHyperduals_affineHorses
     */
    public function testCanExecuteAffineHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - affine horses.txt',
            226173 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bimodal horses".
     *
     * @group horseRacingHyperduals_bimodalHorses
     */
    public function testCanExecuteBimodalHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - bimodal horses.txt',
            4492 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2D horses".
     *
     * @group horseRacingHyperduals_2DHorses
     */
    public function testCanExecute2DHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 2D horses.txt',
            345805 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A fistful of horses".
     *
     * @group horseRacingHyperduals_aFistfulOfHorses
     */
    public function testCanExecuteAFistfulOfHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - a fistful of horses.txt',
            97225 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "For a few horse more".
     *
     * @group horseRacingHyperduals_forAFewHorseMore
     */
    public function testCanExecuteForAFewHorseMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - for a few horse more.txt',
            35608 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All your horse are belong to us".
     *
     * @group horseRacingHyperduals_allYourHorseAreBelongToUs
     */
    public function testCanExecuteAllYourHorseAreBelongToUs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - all your horse are belong to us.txt',
            33322 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many horses".
     *
     * @group horseRacingHyperduals_manyHorses
     */
    public function testCanExecuteManyHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - many horses.txt',
            1293 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mmmaaannn, That Sucks!".
     *
     * @group horseRacingHyperduals_mmmaaannnThatSucks
     */
    public function testCanExecuteMmmaaannnThatSucks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - mmmaaannn, that sucks!.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Don't overflow your stack".
     *
     * @group horseRacingHyperduals_dontOverflowYourStack
     */
    public function testCanExecuteDontOverflowYourStack(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . "/input/13 - don't overflow your stack.txt",
            0 . PHP_EOL
        );
    }
}
