<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SandpileAddition;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SandpileAddition\SandpileAddition;

/**
 * Tests for the "Sandpile addition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SandpileAddition\SandpileAddition
 * @group sandpileAddition
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SandpileAddition();
    }

    /**
     * Test that the code can be executed for "One simple addition".
     *
     * @group sandpileAddition_oneSimpleAddition
     */
    public function testCanExecuteOneSimpleAddition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one simple addition.txt',
            file_get_contents(__DIR__ . '/output/01 - one simple addition.txt')
        );
    }

    /**
     * Test that the code can be executed for "One more simple case".
     *
     * @group sandpileAddition_oneMoreSimpleCase
     */
    public function testCanExecuteOneMoreSimpleCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one more simple case.txt',
            file_get_contents(__DIR__ . '/output/02 - one more simple case.txt')
        );
    }

    /**
     * Test that the code can be executed for "A lot of redistribution".
     *
     * @group sandpileAddition_aLotOfRedistribution
     */
    public function testCanExecuteALotOfRedistribution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a lot of redistribution.txt',
            file_get_contents(__DIR__ . '/output/03 - a lot of redistribution.txt')
        );
    }

    /**
     * Test that the code can be executed for "Pretty packed".
     *
     * @group sandpileAddition_prettyPacked
     */
    public function testCanExecutePrettyPacked(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - pretty packed.txt',
            file_get_contents(__DIR__ . '/output/04 - pretty packed.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two full sandpiles".
     *
     * @group sandpileAddition_twoFullSandpiles
     */
    public function testCanExecuteTwoFullSandpiles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - two full sandpiles.txt',
            file_get_contents(__DIR__ . '/output/05 - two full sandpiles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bigger grid".
     *
     * @group sandpileAddition_biggerGrid
     */
    public function testCanExecuteBiggerGrid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - bigger grid.txt',
            file_get_contents(__DIR__ . '/output/06 - bigger grid.txt')
        );
    }

    /**
     * Test that the code can be executed for "Even bigger".
     *
     * @group sandpileAddition_evenBigger
     */
    public function testCanExecuteEvenBigger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - even bigger.txt',
            file_get_contents(__DIR__ . '/output/07 - even bigger.txt')
        );
    }

    /**
     * Test that the code can be executed for "Asymmetric".
     *
     * @group sandpileAddition_asymmetric
     */
    public function testCanExecuteAsymmetric(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - asymmetric.txt',
            file_get_contents(__DIR__ . '/output/08 - asymmetric.txt')
        );
    }
}
