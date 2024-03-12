<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Cylinders;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Cylinders\Cylinders;

/**
 * Tests for the "Cylinders" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Cylinders\Cylinders
 * @group cylinders
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Cylinders();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group cylinders_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Caves to fill in".
     *
     * @group cylinders_cavesToFillIn
     */
    public function testCanExecuteCavesToFillIne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - caves to fill in.txt',
            file_get_contents(__DIR__ . '/output/02 - caves to fill in.txt')
        );
    }

    /**
     * Test that the code can be executed for "Harsh".
     *
     * @group cylinders_harsh
     */
    public function testCanExecuteHarsh(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - harsh.txt',
            file_get_contents(__DIR__ . '/output/03 - harsh.txt')
        );
    }

    /**
     * Test that the code can be executed for "Optimize your code".
     *
     * @group cylinders_optimizeYourCode
     */
    public function testCanExecuteOptimizeYourCode(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - optimize your code.txt',
            file_get_contents(__DIR__ . '/output/04 - optimize your code.txt')
        );
    }
}
