<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RockPaperScissorsLizardSpock;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\RockPaperScissorsLizardSpock\RockPaperScissorsLizardSpock;

/**
 * Tests for the "Rock paper scissors lizard spock" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RockPaperScissorsLizardSpock\RockPaperScissorsLizardSpock
 * @group rockPaperScissorsLizardSpock
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RockPaperScissorsLizardSpock();
    }

    /**
     * Test that the code can be executed for "Test 1 - same as example".
     *
     * @group rockPaperScissorsLizardSpock_test1SameAsExample
     */
    public function testCanExecuteTest1SameAsExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1 - same as example.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1 - same as example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2 - with 2 players".
     *
     * @group rockPaperScissorsLizardSpock_test2With2Players
     */
    public function testCanExecuteTest2With2Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2 - with 2 players.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2 - with 2 players.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3 - with 32 players".
     *
     * @group rockPaperScissorsLizardSpock_test3With32Players
     */
    public function testCanExecuteTest3With32Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3 - with 32 players.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3 - with 32 players.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4 - only rock and paper".
     *
     * @group rockPaperScissorsLizardSpock_test4OnlyRockAndPaper
     */
    public function testCanExecuteTest4OnlyRockAndPaper(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4 - only rock and paper.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4 - only rock and paper.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5 - with 1024 players".
     *
     * @group rockPaperScissorsLizardSpock_test5With1024Players
     */
    public function testCanExecuteTest5With1024Players(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5 - with 1024 players.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5 - with 1024 players.txt')
        );
    }
}
