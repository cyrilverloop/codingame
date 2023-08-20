<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Asteroids;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\Asteroids\Asteroids;

/**
 * Tests for the "Asteroids" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Asteroids\Asteroids
 * @group asteroids
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Asteroids();
    }

    /**
     * Test that the code can be executed for "Horizontal motion".
     *
     * @group asteroids_horizontalMotion
     */
    public function testCanExecuteHorizontalMotion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - horizontal motion.txt',
            file_get_contents(__DIR__ . '/output/01 - horizontal motion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Vertical motion".
     *
     * @group asteroids_verticalMotion
     */
    public function testCanExecuteVerticalMotion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - vertical motion.txt',
            file_get_contents(__DIR__ . '/output/02 - vertical motion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Combined motion".
     *
     * @group asteroids_combinedMotion
     */
    public function testCanExecuteCombinedMotion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - combined motion.txt',
            file_get_contents(__DIR__ . '/output/03 - combined motion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Negative motion".
     *
     * @group asteroids_negativeMotion
     */
    public function testCanExecuteNegativeMotion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - negative motion.txt',
            file_get_contents(__DIR__ . '/output/04 - negative motion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Greater delta".
     *
     * @group asteroids_greaterDelta
     */
    public function testCanExecuteGreaterDelta(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - greater delta.txt',
            file_get_contents(__DIR__ . '/output/05 - greater delta.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple asteroids".
     *
     * @group asteroids_multipleAsteroids
     */
    public function testCanExecuteMultipleAsteroids(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - multiple asteroids.txt',
            file_get_contents(__DIR__ . '/output/06 - multiple asteroids.txt')
        );
    }

    /**
     * Test that the code can be executed for "Depth".
     *
     * @group asteroids_depth
     */
    public function testCanExecuteDepth(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - depth.txt',
            file_get_contents(__DIR__ . '/output/07 - depth.txt')
        );
    }

    /**
     * Test that the code can be executed for "No motion".
     *
     * @group asteroids_noMotion
     */
    public function testCanExecuteNoMotion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - no motion.txt',
            file_get_contents(__DIR__ . '/output/08 - no motion.txt')
        );
    }

    /**
     * Test that the code can be executed for "Out of bounds".
     *
     * @group asteroids_outOfBounds
     */
    public function testCanExecuteOutOfBounds(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - out of bounds.txt',
            file_get_contents(__DIR__ . '/output/09 - out of bounds.txt')
        );
    }

    /**
     * Test that the code can be executed for "Armageddon".
     *
     * @group asteroids_armageddon
     */
    public function testCanExecuteArmageddon(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - armageddon.txt',
            file_get_contents(__DIR__ . '/output/10 - armageddon.txt')
        );
    }
}
