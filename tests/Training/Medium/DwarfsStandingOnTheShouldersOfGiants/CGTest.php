<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\DwarfsStandingOnTheShouldersOfGiants;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\DwarfsStandingOnTheShouldersOfGiants\DwarfsStandingOnTheShouldersOfGiants;

/**
 * Tests for the "Dwarfs standing on the shoulders of giants" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\DwarfsStandingOnTheShouldersOfGiants\DwarfsStandingOnTheShouldersOfGiants
 * @group dwarfsStandingOnTheShouldersOfGiants
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DwarfsStandingOnTheShouldersOfGiants();
    }

    /**
     * Test that the code can be executed for "Simple example".
     *
     * @group dwarfsStandingOnTheShouldersOfGiants_simpleExample
     */
    public function testCanExecuteSimpleExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple example.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complete example".
     *
     * @group dwarfsStandingOnTheShouldersOfGiants_completeExample
     */
    public function testCanExecuteCompleteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - complete example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Several mentors".
     *
     * @group dwarfsStandingOnTheShouldersOfGiants_severalMentors
     */
    public function testCanExecuteSeveralMentors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - several mentors.txt',
            3 . PHP_EOL
        );
    }
}
