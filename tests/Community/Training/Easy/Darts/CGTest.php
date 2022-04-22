<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Darts;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\Darts\Darts;

/**
 * Tests for the "Dead men's shot" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Darts\Darts
 * @group darts
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Darts();
    }

    /**
     * Test that the code can be executed for "Hit and miss duos".
     *
     * @group darts_hitAndMissDuos
     */
    public function testCanExecuteHitAndMissDuos(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - hit and miss duos.txt',
            file_get_contents(__DIR__ . '/output/01 - hit and miss duos.txt')
        );
    }

    /**
     * Test that the code can be executed for "Solo play".
     *
     * @group darts_soloPlay
     */
    public function testCanExecuteSoloPlay(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - Solo play.txt',
            "Will 30" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Chaotic Ties".
     *
     * @group darts_chaoticTies
     */
    public function testCanExecuteChaoticTies(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - chaotic ties.txt',
            file_get_contents(__DIR__ . '/output/03 - chaotic ties.txt')
        );
    }

    /**
     * Test that the code can be executed for "Circles".
     *
     * @group darts_circles
     */
    public function testCanExecuteCircles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - circles.txt',
            file_get_contents(__DIR__ . '/output/04 - circles.txt')
        );
    }
}
