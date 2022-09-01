<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MitosisMayhem;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\MitosisMayhem\MitosisMayhem;

/**
 * Tests for the "Mitosis mayhem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MitosisMayhem\MitosisMayhem
 * @group mitosisMayhem
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MitosisMayhem();
    }

    /**
     * Test that the code can be executed for "All full".
     *
     * @group mitosisMayhem_allFull
     */
    public function testCanExecuteAllFull(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - all full.txt',
            "Red: 10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Missing a few".
     *
     * @group photoBoothTransformation_missingAFew
     */
    public function testCanExecuteMissingAFew(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - missing a few.txt',
            file_get_contents(__DIR__ . '/output/02 - missing a few.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple".
     *
     * @group photoBoothTransformation_multiple
     */
    public function testCanExecuteMultiple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple.txt',
            file_get_contents(__DIR__ . '/output/03 - multiple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Overflow!".
     *
     * @group mitosisMayhem_overflow
     */
    public function testCanExecuteOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - overflow!.txt',
            "OVERFLOW!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Overflow! 2".
     *
     * @group mitosisMayhem_overflow2
     */
    public function testCanExecuteOverflow2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - overflow! 2.txt',
            "OVERFLOW!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Stop!".
     *
     * @group photoBoothTransformation_stop
     */
    public function testCanExecuteStop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - stop!.txt',
            file_get_contents(__DIR__ . '/output/06 - stop!.txt')
        );
    }

    /**
     * Test that the code can be executed for "Conflict!".
     *
     * @group photoBoothTransformation_conflict
     */
    public function testCanExecuteConflict(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - conflict!.txt',
            file_get_contents(__DIR__ . '/output/07 - conflict!.txt')
        );
    }

    /**
     * Test that the code can be executed for "Overpowered".
     *
     * @group photoBoothTransformation_overpowered
     */
    public function testCanExecuteOverpowered(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - overpowered.txt',
            file_get_contents(__DIR__ . '/output/08 - overpowered.txt')
        );
    }

    /**
     * Test that the code can be executed for "Uneven conflict".
     *
     * @group photoBoothTransformation_unevenConflict
     */
    public function testCanExecuteUnevenConflict(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - uneven conflict.txt',
            file_get_contents(__DIR__ . '/output/09 - uneven conflict.txt')
        );
    }

    /**
     * Test that the code can be executed for "Consumption".
     *
     * @group photoBoothTransformation_consumption
     */
    public function testCanExecuteUnevenConsumption(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - consumption.txt',
            file_get_contents(__DIR__ . '/output/10 - consumption.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bigger fish".
     *
     * @group photoBoothTransformation_biggerFish
     */
    public function testCanExecuteUnevenBiggerFish(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - bigger fish.txt',
            file_get_contents(__DIR__ . '/output/11 - bigger fish.txt')
        );
    }

    /**
     * Test that the code can be executed for "Skip the little ones".
     *
     * @group photoBoothTransformation_skipTheLittleOnes
     */
    public function testCanExecuteSkipTheLittleOnes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - skip the little ones.txt',
            file_get_contents(__DIR__ . '/output/12 - skip the little ones.txt')
        );
    }

    /**
     * Test that the code can be executed for "Imperfect conflict".
     *
     * @group photoBoothTransformation_imperfectConflict
     */
    public function testCanExecuteImperfectConflict(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - imperfect conflict.txt',
            file_get_contents(__DIR__ . '/output/13 - imperfect conflict.txt')
        );
    }
}
