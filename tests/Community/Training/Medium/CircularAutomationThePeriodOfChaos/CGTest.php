<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CircularAutomationThePeriodOfChaos;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\CircularAutomationThePeriodOfChaos\CircularAutomationThePeriodOfChaos;

/**
 * Tests for the "Circular automation, the period of chaos" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CircularAutomationThePeriodOfChaos\CircularAutomationThePeriodOfChaos
 * @group circularAutomationThePeriodOfChaos
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CircularAutomationThePeriodOfChaos();
    }

    /**
     * Test that the code can be executed for "Simple example".
     *
     * @group circularAutomationThePeriodOfChaos_simpleExample
     */
    public function testCanExecuteSimpleExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple example.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Blinker".
     *
     * @group circularAutomationThePeriodOfChaos_blinker
     */
    public function testCanExecuteBlinker(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - blinker.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rule 250 mix".
     *
     * @group circularAutomationThePeriodOfChaos_rule250Mix
     */
    public function testCanExecuteRule250Mix(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - rule 250 mix.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "126 = fractal".
     *
     * @group circularAutomationThePeriodOfChaos_126Fractal
     */
    public function testCanExecute126Fractal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 126 = fractal.txt',
            1022 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "So Long".
     *
     * @group circularAutomationThePeriodOfChaos_soLong
     */
    public function testCanExecuteSoLong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - so long.txt',
            "BIG" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Rule 110".
     *
     * @group circularAutomationThePeriodOfChaos_rule110
     */
    public function testCanExecuteRule110(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - rule 110.txt',
            2730 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Where is the motif".
     *
     * @group circularAutomationThePeriodOfChaos_whereIsTheMotif
     */
    public function testCanExecuteWhereIsTheMotif(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - where is the motif.txt',
            1455 . PHP_EOL
        );
    }
}
