<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\EquivalentResistanceCircuitBuilding;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\EquivalentResistanceCircuitBuilding\EquivalentResistanceCircuitBuilding;

/**
 * Tests for the "Equivalent resistance, circuit building" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\EquivalentResistanceCircuitBuilding\EquivalentResistanceCircuitBuilding
 * @group equivalentResistanceCircuitBuilding
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new EquivalentResistanceCircuitBuilding();
    }

    /**
     * Test that the code can be executed for "Series".
     *
     * @group equivalentResistanceCircuitBuilding_series
     */
    public function testCanExecuteSeries(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - series.txt',
            "30.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parallel".
     *
     * @group equivalentResistanceCircuitBuilding_parallel
     */
    public function testCanExecuteParallel(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - parallel.txt',
            11.1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Combined (example diagram)".
     *
     * @group equivalentResistanceCircuitBuilding_combined
     */
    public function testCanExecuteCombined(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - combined (example diagram).txt',
            10.7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex".
     *
     * @group equivalentResistanceCircuitBuilding_complex
     */
    public function testCanExecuteComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - complex.txt',
            2.4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More complex".
     *
     * @group equivalentResistanceCircuitBuilding_moreComplex
     */
    public function testCanExecuteMoreComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more complex.txt',
            "45.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5-pointed star".
     *
     * @group equivalentResistanceCircuitBuilding_5PointedStar
     */
    public function testCanExecute5PointedStar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 5-pointed star.txt',
            "91.0" . PHP_EOL
        );
    }
}
