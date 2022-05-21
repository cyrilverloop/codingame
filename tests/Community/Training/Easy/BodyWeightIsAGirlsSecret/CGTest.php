<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BodyWeightIsAGirlsSecret;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\BodyWeightIsAGirlsSecret\BodyWeightIsAGirlsSecret;

/**
 * Tests for the "Body weight is a girl's secret" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BodyWeightIsAGirlsSecret\BodyWeightIsAGirlsSecret
 * @group bodyWeightIsAGirlsSecret
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BodyWeightIsAGirlsSecret();
    }

    /**
     * Test that the code can be executed for "All different".
     *
     * @group bodyWeightIsAGirlsSecret_allDifferent
     */
    public function testCanExecuteAllDifferent(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - all different.txt',
            "45 51 52 63 76" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same paired values".
     *
     * @group bodyWeightIsAGirlsSecret_samePairedValues
     */
    public function testCanExecuteSamePairedValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - same paired values.txt',
            "40 51 62 73 84" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same individual values".
     *
     * @group bodyWeightIsAGirlsSecret_sameIndividualValues
     */
    public function testCanExecuteSameIndividualValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - same individual values.txt',
            "20 487 487 488 489" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Including a baby".
     *
     * @group bodyWeightIsAGirlsSecret_includingABaby
     */
    public function testCanExecuteIncludingABaby(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - including a baby.txt',
            "1 81 100 105 111" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "XXL".
     *
     * @group bodyWeightIsAGirlsSecret_XXL
     */
    public function testCanExecuteXXL(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - XXL.txt',
            "798 841 843 999 1000" . PHP_EOL
        );
    }
}
