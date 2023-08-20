<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BustSpeedingVehicles;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BustSpeedingVehicles\BustSpeedingVehicles;

/**
 * Tests for the "Bust speeding vehicles" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BustSpeedingVehicles\BustSpeedingVehicles
 * @group bustSpeedingVehicles
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BustSpeedingVehicles();
    }

    /**
     * Test that the code can be executed for "Example test".
     *
     * @group bytePairEncoding_exampleTest
     */
    public function testCanExecuteExampleTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example test.txt',
            "RSLJ97 185" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No excess speed".
     *
     * @group bytePairEncoding_noExcessSpeed
     */
    public function testCanExecuteNoExcessSpeed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no excess speed.txt',
            "OK" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More than one car in excess speed".
     *
     * @group bytePairEncoding_moreThanOneCarInExcessSpeed
     */
    public function testCanExecuteMoreThanOneCarInExcessSpeed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more than one car in excess speed.txt',
            file_get_contents(__DIR__ . '/output/03 - more than one car in excess speed.txt')
        );
    }

    /**
     * Test that the code can be executed for "Speed limit".
     *
     * @group bytePairEncoding_speedLimit
     */
    public function testCanExecuteSpeedLimit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - speed limit.txt',
            "ZBZJ42 275" . PHP_EOL
        );
    }
}
