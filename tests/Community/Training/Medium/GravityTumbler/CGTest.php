<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GravityTumbler;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\GravityTumbler\GravityTumbler;

/**
 * Tests for the "Gravity tumbler" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GravityTumbler\GravityTumbler
 * @group gravityTumbler
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new GravityTumbler();
    }

    /**
     * Test that the code can be executed for "Tumble".
     *
     * @group gravityTumbler_tumble
     */
    public function testCanExecuteTumble(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tumble.txt',
            file_get_contents(__DIR__ . '/output/01 - tumble.txt')
        );
    }

    /**
     * Test that the code can be executed for "Double".
     *
     * @group gravityTumbler_double
     */
    public function testCanExecuteDouble(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - double.txt',
            file_get_contents(__DIR__ . '/output/02 - double.txt')
        );
    }

    /**
     * Test that the code can be executed for "Triple".
     *
     * @group gravityTumbler_triple
     */
    public function testCanExecuteTriple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - triple.txt',
            file_get_contents(__DIR__ . '/output/03 - triple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Whee!".
     *
     * @group gravityTumbler_whee
     */
    public function testCanExecuteWhee(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - whee!.txt',
            file_get_contents(__DIR__ . '/output/04 - whee!.txt')
        );
    }

    /**
     * Test that the code can be executed for "CodinGame 1".
     *
     * @group gravityTumbler_codinGame1
     */
    public function testCanExecuteCodinGame1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - CodinGame 1.txt',
            file_get_contents(__DIR__ . '/output/05 - CodinGame 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "CodinGame 2".
     *
     * @group gravityTumbler_codinGame2
     */
    public function testCanExecuteCodinGame2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - CodinGame 2.txt',
            file_get_contents(__DIR__ . '/output/06 - CodinGame 2.txt')
        );
    }
}
