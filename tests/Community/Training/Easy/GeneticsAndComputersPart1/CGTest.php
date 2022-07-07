<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\GeneticsAndComputersPart1;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\GeneticsAndComputersPart1\GeneticsAndComputersPart1;

/**
 * Tests for the "Genetics and computers - part 1" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\GeneticsAndComputersPart1\GeneticsAndComputersPart1
 * @group geneticsAndComputersPart1
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new GeneticsAndComputersPart1();
    }

    /**
     * Test that the code can be executed for "Round yellow ✖ round yellow".
     *
     * @group geneticsAndComputersPart1_roundYellowRoundYellow
     */
    public function testCanExecuteRoundYellowRoundYellow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - round yellow round yellow.txt',
            "1:0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Round yellow ✖ round green".
     *
     * @group geneticsAndComputersPart1_roundYellowRoundGreen
     */
    public function testCanExecuteRoundYellowRoundGreen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - round yellow round green.txt',
            "1:0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wrinkled yellow ✖ round green".
     *
     * @group geneticsAndComputersPart1_wrinkledYellowRoundGreen
     */
    public function testCanExecuteWrinkledYellowRoundGreen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - wrinkled yellow round green.txt',
            "1:1:1:1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tall yellow ✖ tall green".
     *
     * @group geneticsAndComputersPart1_tallYellowTallGreen
     */
    public function testCanExecuteTallYellowTallGreen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - tall yellow tall green.txt',
            "1:2:1:1:2:1" . PHP_EOL
        );
    }
}
