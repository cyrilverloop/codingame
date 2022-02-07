<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\HorseRacingDuals;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Easy\HorseRacingDuals\HorseRacingDuals;

/**
 * @coversDefaultClass \CyrilVerloop\Codingame\Training\Easy\HorseRacingDuals\HorseRacingDuals
 * @group horseRacingDuals
 */
final class HorseRacingDualsTest extends PuzzleTest
{
    // Methods :

    /**
     * Initialises tests.
     */
    public function setUp(): void
    {
        $this->puzzle = new HorseRacingDuals();
    }

    /**
     * Test that the code can be executed for "Simple case".
     *
     * @covers ::execute
     * @group horseRacingDuals_simpleCase
     */
    public function testCanExecuteSimpleCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple case.txt',
            '1' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Horses in any order".
     *
     * @covers ::execute
     * @group horseRacingDuals_horsesInAnyOrder
     */
    public function testCanExecuteHorsesInAnyOrder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - horses in any order.txt',
            '1' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many horses".
     *
     * @covers ::execute
     * @group horseRacingDuals_manyHorses
     */
    public function testCanExecuteManyHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - many horses.txt',
            '47' . PHP_EOL
        );
    }
}
