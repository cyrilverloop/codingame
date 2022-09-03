<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RobberyOptimisation;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\RobberyOptimisation\RobberyOptimisation;

/**
 * Tests for the "Robbery optimisation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RobberyOptimisation\RobberyOptimisation
 * @group robberyOptimisation
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RobberyOptimisation();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group robberyOptimisation_example
     */
    public function testCanExecute1Week(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            31 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 houses 1".
     *
     * @group robberyOptimisation_3Houses1
     */
    public function testCanExecute3Houses1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3 houses 1.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 houses 2".
     *
     * @group robberyOptimisation_3Houses2
     */
    public function testCanExecute3Houses2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 3 houses 2.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "9 identical houses".
     *
     * @group robberyOptimisation_9IdenticalHouses
     */
    public function testCanExecute9IdenticalHouses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 9 identical houses.txt',
            50 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1 house".
     *
     * @group robberyOptimisation_1House
     */
    public function testCanExecute1House(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 1 house.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Don't just alternate houses".
     *
     * @group robberyOptimisation_dontJustAlternateHouses
     */
    public function testCanExecuteDontJustAlternateHouses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - don\'t just alternate houses.txt',
            31 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "20 houses".
     *
     * @group robberyOptimisation_20Houses
     */
    public function testCanExecute20Houses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 20 houses.txt',
            75 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "50 Houses".
     *
     * @group robberyOptimisation_50Houses
     */
    public function testCanExecute50Houses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 50 houses.txt',
            916 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "8 Houses".
     *
     * @group robberyOptimisation_8Houses
     */
    public function testCanExecute8Houses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 8 houses.txt',
            21 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "75 Houses".
     *
     * @group robberyOptimisation_75Houses
     */
    public function testCanExecute75Houses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - 75 houses.txt',
            220208697424167 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "100 Houses".
     *
     * @group robberyOptimisation_100Houses
     */
    public function testCanExecute100Houses(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - 100 houses.txt',
            291429266834646 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Debug helper".
     *
     * @group robberyOptimisation_debugHelper
     */
    public function testCanExecuteDebugHelper(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - debug helper.txt',
            8589934592 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative values".
     *
     * @group robberyOptimisation_negativeValues
     */
    public function testCanExecuteNegativeValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - negative values.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative and positive".
     *
     * @group robberyOptimisation_negativeAndPositive
     */
    public function testCanExecuteNegativeAndPositive(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - negative and positive.txt',
            10 . PHP_EOL
        );
    }
}
