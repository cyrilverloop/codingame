<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OneByOneByOneRubiksCubeMovements;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OneByOneByOneRubiksCubeMovements\OneByOneByOneRubiksCubeMovements;

/**
 * Tests for the "1×1×1 rubik’s cube movements" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OneByOneByOneRubiksCubeMovements\OneByOneByOneRubiksCubeMovements
 * @group oneByOneByOneRubiksCubeMovements
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OneByOneByOneRubiksCubeMovements();
    }

    /**
     * Test that the code can be executed for "One rotation".
     *
     * @group oneByOneByOneRubiksCubeMovements_oneRotation
     */
    public function testCanExecuteOneRotation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one rotation.txt',
            file_get_contents(__DIR__ . '/output/01 - one rotation.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two rotations".
     *
     * @group oneByOneByOneRubiksCubeMovements_twoRotations
     */
    public function testCanExecuteTwoRotations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two rotations.txt',
            file_get_contents(__DIR__ . '/output/02 - two rotations.txt')
        );
    }

    /**
     * Test that the code can be executed for "Give me five!".
     *
     * @group oneByOneByOneRubiksCubeMovements_giveMeFive
     */
    public function testCanExecuteGiveMeFive(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - give me five.txt',
            file_get_contents(__DIR__ . '/output/03 - give me five.txt')
        );
    }

    /**
     * Test that the code can be executed for "Identity".
     *
     * @group oneByOneByOneRubiksCubeMovements_identity
     */
    public function testCanExecuteIdentity(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - identity.txt',
            file_get_contents(__DIR__ . '/output/04 - identity.txt')
        );
    }

    /**
     * Test that the code can be executed for "A long route".
     *
     * @group oneByOneByOneRubiksCubeMovements_aLongRoute
     */
    public function testCanExecuteALongRoute(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - a long route.txt',
            file_get_contents(__DIR__ . '/output/05 - a long route.txt')
        );
    }

    /**
     * Test that the code can be executed for "Stuttering".
     *
     * @group oneByOneByOneRubiksCubeMovements_stuttering
     */
    public function testCanExecuteStuttering(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - stuttering.txt',
            file_get_contents(__DIR__ . '/output/06 - stuttering.txt')
        );
    }
}
