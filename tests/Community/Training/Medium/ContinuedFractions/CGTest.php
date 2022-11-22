<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ContinuedFractions;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\ContinuedFractions\ContinuedFractions;

/**
 * Tests for the "Continued fractions" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ContinuedFractions\ContinuedFractions
 * @group continuedFractions
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ContinuedFractions();
    }

    /**
     * Test that the code can be executed for "F -> CF".
     *
     * @group continuedFractions_FCF
     */
    public function testCanExecuteFCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - F -> CF.txt',
            "[1; 2, 3]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "CF -> F".
     *
     * @group continuedFractions_CFF
     */
    public function testCanExecuteCFF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - CF -> F.txt',
            "71/31" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small fraction".
     *
     * @group continuedFractions_smallFraction
     */
    public function testCanExecuteSmallFraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small fraction.txt',
            "[0; 1, 2, 2]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small CF".
     *
     * @group continuedFractions_smallCF
     */
    public function testCanExecuteSmallCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - small CF.txt',
            "19/24" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium fraction".
     *
     * @group continuedFractions_mediumFraction
     */
    public function testCanExecuteMediumFraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - medium fraction.txt',
            "[7; 5, 1, 3, 1, 1, 2]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium CF".
     *
     * @group continuedFractions_mediumCF
     */
    public function testCanExecuteMediumCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - medium CF.txt',
            "13887/1117" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large fraction".
     *
     * @group continuedFractions_largeFraction
     */
    public function testCanExecuteLargeFraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - large fraction.txt',
            "[6; 4, 20, 1, 25, 6]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large CF".
     *
     * @group continuedFractions_largeCF
     */
    public function testCanExecuteLargeCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - large CF.txt',
            "416779/119113" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "F -> Long CF".
     *
     * @group continuedFractions_FLongCF
     */
    public function testCanExecuteFLongCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - F -> long CF.txt',
            "[1; 2, 2, 1, 2, 1, 2, 1, 2, 2, 1, 1, 2, 1, 1, 1, 2, 1, 2]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long CF -> F".
     *
     * @group continuedFractions_longCFF
     */
    public function testCanExecuteLongCFF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - Long CF -> F.txt',
            "500287/154989" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative fraction".
     *
     * @group continuedFractions_negativeFraction
     */
    public function testCanExecuteNegativeFraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - negative fraction.txt',
            "[-2; 1, 11]" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative CF".
     *
     * @group continuedFractions_negativeCF
     */
    public function testCanExecuteNegativeCF(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - negative CF.txt',
            "-833719/265381" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All together now".
     *
     * @group continuedFractions_allTogetherNow
     */
    public function testCanExecuteAllTogetherNow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - all together now.txt',
            "-833719/265381" . PHP_EOL
        );
    }
}
