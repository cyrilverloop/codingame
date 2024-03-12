<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SweetSpot;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SweetSpot\SweetSpot;

/**
 * Tests for the "Sweet spot" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SweetSpot\SweetSpot
 * @group sweetSpot
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SweetSpot();
    }

    /**
     * Test that the code can be executed for "First attempt with A-bomb".
     *
     * @group sweetSpot_firstAttemptWithABomb
     */
    public function testCanExecuteFirstAttemptWithABomb(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - first attempt with a-bomb.txt',
            file_get_contents(__DIR__ . '/output/01 - first attempt with a-bomb.txt')
        );
    }

    /**
     * Test that the code can be executed for "First attempt with H-bomb".
     *
     * @group sweetSpot_firstAttemptWithHBomb
     */
    public function testCanExecuteFirstAttemptWithHBomb(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - first attempt with h-bomb.txt',
            file_get_contents(__DIR__ . '/output/02 - first attempt with h-bomb.txt')
        );
    }

    /**
     * Test that the code can be executed for "Real case : A/H-bomb".
     *
     * @group sweetSpot_realCaseAHBomb
     */
    public function testCanExecuteRealCaseAHBomb(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - real case : A H-bomb.txt',
            file_get_contents(__DIR__ . '/output/03 - real case : A H-bomb.txt')
        );
    }

    /**
     * Test that the code can be executed for "First attempt with B-bomb".
     *
     * @group sweetSpot_firstAttemptWithBBomb
     */
    public function testCanExecuteFirstAttemptWithBBomb(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - first attempt with b-bomb.txt',
            file_get_contents(__DIR__ . '/output/04 - first attempt with b-bomb.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small map".
     *
     * @group sweetSpot_smallMap
     */
    public function testCanExecuteSmallMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - small map.txt',
            file_get_contents(__DIR__ . '/output/05 - small map.txt')
        );
    }

    /**
     * Test that the code can be executed for "Real case : all bombs".
     *
     * @group sweetSpot_realCaseAllBombs
     */
    public function testCanExecuteRealCaseAllBombs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - real case : all bombs.txt',
            file_get_contents(__DIR__ . '/output/06 - real case : all bombs.txt')
        );
    }

    /**
     * Test that the code can be executed for "Damaged map".
     *
     * @group sweetSpot_damagedMap
     */
    public function testCanExecuteDamagedMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - damaged map.txt',
            file_get_contents(__DIR__ . '/output/07 - damaged map.txt')
        );
    }

    /**
     * Test that the code can be executed for "No explosions".
     *
     * @group sweetSpot_noExplosions
     */
    public function testCanExecuteNoExplosions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - no explosions.txt',
            file_get_contents(__DIR__ . '/output/08 - no explosions.txt')
        );
    }
}
