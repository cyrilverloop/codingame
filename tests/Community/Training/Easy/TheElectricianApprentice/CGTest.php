<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheElectricianApprentice;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TheElectricianApprentice\TheElectricianApprentice;

/**
 * Tests for the "The electrician apprentice" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheElectricianApprentice\TheElectricianApprentice
 * @group theElectricianApprentice
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheElectricianApprentice();
    }

    /**
     * Test that the code can be executed for "1 switch 1 light".
     *
     * @group theElectricianApprentice_1Switch1Light
     */
    public function testCanExecuteOddSpiral(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1 switch 1 light.txt',
            "LIGHT is ON" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 parallel switches 1 light".
     *
     * @group theElectricianApprentice_2ParallelSwitches1Light
     */
    public function testCanExecute2ParallelSwitches1Light(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 2 parallel switches 1 light.txt',
            "LIGHT is ON" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 series switches 1 light".
     *
     * @group theElectricianApprentice_2SeriesSwitches1Light
     */
    public function testCanExecute2SeriesSwitches1Light(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 2 series switches 1 light.txt',
            "LIGHT is OFF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two lights".
     *
     * @group theElectricianApprentice_twoLights
     */
    public function testCanExecuteTwoLights(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - two lights.txt',
            file_get_contents(__DIR__ . '/output/04 - two lights.txt')
        );
    }

    /**
     * Test that the code can be executed for "Series and parallel".
     *
     * @group theElectricianApprentice_seriesAndParallel
     */
    public function testCanExecuteSeriesAndParallel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - series and parallel.txt',
            "LIGHT is ON" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mixed".
     *
     * @group theElectricianApprentice_mixed
     */
    public function testCanExecuteMixed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - mixed.txt',
            file_get_contents(__DIR__ . '/output/06 - mixed.txt')
        );
    }

    /**
     * Test that the code can be executed for "Weird Home".
     *
     * @group theElectricianApprentice_weirdHome
     */
    public function testCanExecuteWeirdHome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - weird home.txt',
            file_get_contents(__DIR__ . '/output/07 - weird home.txt')
        );
    }

    /**
     * Test that the code can be executed for "Regular Home".
     *
     * @group theElectricianApprentice_regularHome
     */
    public function testCanExecuteRegulardHome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - regular home.txt',
            file_get_contents(__DIR__ . '/output/08 - regular home.txt')
        );
    }
}
