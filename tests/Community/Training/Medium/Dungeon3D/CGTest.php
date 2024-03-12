<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Dungeon3D;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Dungeon3D\Dungeon3D;

/**
 * Tests for the "Dungeon 3D" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Dungeon3D\Dungeon3D
 * @group dungeon3D
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Dungeon3D();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group dungeon3D_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small".
     *
     * @group dungeon3D_small
     */
    public function testCanExecuteSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Direct access".
     *
     * @group dungeon3D_directAccess
     */
    public function testCanExecuteDirectAccess(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - direct access.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "NO PATH".
     *
     * @group dungeon3D_noPath
     */
    public function testCanExecuteNoPath(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - NO PATH.txt',
            "NO PATH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "10's cube".
     *
     * @group dungeon3D_10sCube
     */
    public function testCanExecute10sCube(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 10\'s cube.txt',
            14 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "13's cube".
     *
     * @group dungeon3D_13sCube
     */
    public function testCanExecute13sCube(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 13\'s cube.txt',
            95 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multi-path 1".
     *
     * @group dungeon3D_multiPath1
     */
    public function testCanExecuteMultiPath1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - multi-path 1.txt',
            138 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multi-path 2".
     *
     * @group dungeon3D_multiPath2
     */
    public function testCanExecuteMultiPath2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - multi-path 2.txt',
            102 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Space".
     *
     * @group dungeon3D_space
     */
    public function testCanExecuteSpace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - space.txt',
            30 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Codingame".
     *
     * @group dungeon3D_codingame
     */
    public function testCanExecuteCodingame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - codingame.txt',
            17 . PHP_EOL
        );
    }
}
