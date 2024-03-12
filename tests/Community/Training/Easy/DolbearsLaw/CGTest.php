<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DolbearsLaw;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\DolbearsLaw\DolbearsLaw;

/**
 * Tests for the "Dolbear's law" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DolbearsLaw\DolbearsLaw
 * @group dolbearsLaw
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DolbearsLaw();
    }

    /**
     * Test that the code can be executed for "The random is in the spring".
     *
     * @group dolbearsLaw_theRandomIsInTheSpring
     */
    public function testCanExecuteTheRandomIsInTheSpring(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - the random is in the spring.txt',
            file_get_contents(__DIR__ . '/output/01 - the random is in the spring.txt')
        );
    }

    /**
     * Test that the code can be executed for "Winter is coming".
     *
     * @group dolbearsLaw_winterIsComing
     */
    public function testCanExecuteWinterIsComing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - winter is coming.txt',
            4.9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jiminy beats the measure".
     *
     * @group dolbearsLaw_jiminyBeatsTheMeasure
     */
    public function testCanExecuteJiminyBeatsTheMeasure(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - jiminy beats the measure.txt',
            file_get_contents(__DIR__ . '/output/03 - jiminy beats the measure.txt')
        );
    }

    /**
     * Test that the code can be executed for "Jiminy nearly died of cold...".
     *
     * @group dolbearsLaw_jiminyNearlyDiedOfCold
     */
    public function testCanExecuteJiminyNearlyDiedOfCold(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - jiminy nearly died of cold.txt',
            4.4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "An hour in summer".
     *
     * @group dolbearsLaw_anHourInSummer
     */
    public function testCanExecuteAnHourInSummer(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - an hour in summer.txt',
            file_get_contents(__DIR__ . '/output/05 - an hour in summer.txt')
        );
    }

    /**
     * Test that the code can be executed for "30 minutes of heat wave".
     *
     * @group dolbearsLaw_30MinutesOfHeatWave
     */
    public function testCanExecute30MinutesOfHeatWave(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 30 minutes of heat wave.txt',
            "42.0" . PHP_EOL
        );
    }
}
