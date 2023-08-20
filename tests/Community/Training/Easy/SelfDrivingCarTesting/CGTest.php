<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SelfDrivingCarTesting;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\SelfDrivingCarTesting\SelfDrivingCarTesting;

/**
 * Tests for the "Self-driving car testing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SelfDrivingCarTesting\SelfDrivingCarTesting
 * @group selfDrivingCarTesting
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SelfDrivingCarTesting();
    }

    /**
     * Test that the code can be executed for "A simple straight line".
     *
     * @group selfDrivingCarTesting_aSimpleStraightLine
     */
    public function testCanExecuteASimpleStraightLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple straight line.txt',
            file_get_contents(__DIR__ . '/output/01 - a simple straight line.txt')
        );
    }

    /**
     * Test that the code can be executed for "Gentleman, start your engines".
     *
     * @group selfDrivingCarTesting_gentlemanStartYourEngines
     */
    public function testCanExecuteGentlemanStartYourEngines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - gentleman, start your engines.txt',
            file_get_contents(__DIR__ . '/output/02 - gentleman, start your engines.txt')
        );
    }

    /**
     * Test that the code can be executed for "The Senna 'S'".
     *
     * @group selfDrivingCarTesting_theSennaS
     */
    public function testCanExecuteTheSennaS(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - the Senna S.txt',
            file_get_contents(__DIR__ . '/output/03 - the Senna S.txt')
        );
    }

    /**
     * Test that the code can be executed for "Drunk car".
     *
     * @group selfDrivingCarTesting_drunkCar
     */
    public function testCanExecuteDrunkCar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - drunk car.txt',
            file_get_contents(__DIR__ . '/output/04 - drunk car.txt')
        );
    }
}
