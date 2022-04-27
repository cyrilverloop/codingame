<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\AMountainOfAMoleHill;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\AMountainOfAMoleHill\AMountainOfAMoleHill;

/**
 * Tests for the "A mountain of a mole hill" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\AMountainOfAMoleHill\AMountainOfAMoleHill
 * @group aMountainOfAMoleHill
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new AMountainOfAMoleHill();
    }

    /**
     * Test that the code can be executed for "A simple garden".
     *
     * @group aMountainOfAMoleHill_aSimpleGarden
     */
    public function testCanExecuteASimpleGarden(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple garden.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "From another angle".
     *
     * @group aMountainOfAMoleHill_fromAnotherAngle
     */
    public function testCanExecuteFromAnotherAngle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - from another angle.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Getting crowded".
     *
     * @group aMountainOfAMoleHill_gettingCrowded
     */
    public function testCanExecuteGettingCrowded(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - getting crowded.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Divide and conquer".
     *
     * @group aMountainOfAMoleHill_divideAndConquer
     */
    public function testCanExecuteDivideAndConquer(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - divide and conquer.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bag of snakes".
     *
     * @group aMountainOfAMoleHill_bagOfSnakes
     */
    public function testCanExecuteBagOfSnakes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - bag of snakes.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zzzzz...".
     *
     * @group aMountainOfAMoleHill_zzzzz
     */
    public function testCanExecuteZzzzz(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - zzzzz....txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Include and infiltrate".
     *
     * @group aMountainOfAMoleHill_includeAndInfiltrate
     */
    public function testCanExecuteIncludeAndInfiltrate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - Include and infiltrate.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "How did THAT happen?".
     *
     * @group aMountainOfAMoleHill_howDidTHATHappen
     */
    public function testCanExecuteHowDidTHATHappen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - how did THAT happen.txt',
            74 . PHP_EOL
        );
    }
}
