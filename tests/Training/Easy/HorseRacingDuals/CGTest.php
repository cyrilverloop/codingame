<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\HorseRacingDuals;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Easy\HorseRacingDuals\HorseRacingDuals;
use PHPUnit\Framework\Attributes as PA;

/**
 * Tests for the "Horse-racing Duals" puzzle.
 */
#[
    PA\CoversClass(HorseRacingDuals::class),
    PA\Group('horseRacingDuals'),
    PA\Medium
]
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HorseRacingDuals();
    }

    /**
     * Test that the code can be executed for "Simple case".
     */
    #[PA\Group('horseRacingDuals_simpleCase')]
    public function testCanExecuteSimpleCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple case.txt',
            file_get_contents(__DIR__ . '/output/01 - simple case.txt')
        );
    }

    /**
     * Test that the code can be executed for "Horses in any order".
     */
    #[PA\Group('horseRacingDuals_horsesInAnyOrder')]
    public function testCanExecuteHorsesInAnyOrder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - horses in any order.txt',
            file_get_contents(__DIR__ . '/output/02 - horses in any order.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many horses".
     */
    #[PA\Group('horseRacingDuals_manyHorses')]
    public function testCanExecuteManyHorses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - many horses.txt',
            file_get_contents(__DIR__ . '/output/03 - many horses.txt')
        );
    }
}
