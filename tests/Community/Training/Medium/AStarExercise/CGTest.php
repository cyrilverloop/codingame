<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\AStarExercise;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\AStarExercise\AStarExercise;

/**
 * Tests for the "A-star exercise" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\AStarExercise\AStarExercise
 * @group aStarExercise
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AStarExercise();
    }

    /**
     * Test that the code can be executed for "3-node graph".
     *
     * @group aStarExercise_3NodeGraph
     */
    public function testCanExecute3NodeGraph(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 3-node graph.txt',
            file_get_contents(__DIR__ . '/output/01 - 3-node graph.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small graph A".
     *
     * @group aStarExercise_smallGraphA
     */
    public function testCanExecuteSmallGraphA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small graph A.txt',
            file_get_contents(__DIR__ . '/output/02 - small graph A.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small graph A'".
     *
     * @group aStarExercise_smallGraphAPrime
     */
    public function testCanExecuteSmallGraphAPrime(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small graph A-prime.txt',
            file_get_contents(__DIR__ . '/output/03 - small graph A-prime.txt')
        );
    }

    /**
     * Test that the code can be executed for "Slightly larger graph".
     *
     * @group aStarExercise_slightlyLargerGraph
     */
    public function testCanExecuteSlightlyLargerGraph(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - slightly larger graph.txt',
            file_get_contents(__DIR__ . '/output/04 - slightly larger graph.txt')
        );
    }

    /**
     * Test that the code can be executed for "From Arad to Bucharest".
     *
     * @group aStarExercise_fromAradToBucharest
     */
    public function testCanExecuteFromAradToBucharest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - from Arad to Bucharest.txt',
            file_get_contents(__DIR__ . '/output/05 - from Arad to Bucharest.txt')
        );
    }

    /**
     * Test that the code can be executed for "Equal f-value".
     *
     * @group aStarExercise_equalFValue
     */
    public function testCanExecuteEqualFValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - equal f-value.txt',
            file_get_contents(__DIR__ . '/output/06 - equal f-value.txt')
        );
    }
}
