<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ThreeDPrinter;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ThreeDPrinter\ThreeDPrinter;

/**
 * Tests for the "3D printer" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ThreeDPrinter\ThreeDPrinter
 * @group threeDPrinter
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ThreeDPrinter();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group threeDPrinter_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Weird shape".
     *
     * @group threeDPrinter_weirdShape
     */
    public function testCanExecuteWeirdShape(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - weird shape.txt',
            file_get_contents(__DIR__ . '/output/02 - weird shape.txt')
        );
    }

    /**
     * Test that the code can be executed for "WHAT THE...".
     *
     * @group threeDPrinter_WHATTHE
     */
    public function testCanExecuteWHATTHE(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - WHAT THE.txt',
            file_get_contents(__DIR__ . '/output/03 - WHAT THE.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hole".
     *
     * @group threeDPrinter_hole
     */
    public function testCanExecuteHole(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - hole.txt',
            file_get_contents(__DIR__ . '/output/04 - hole.txt')
        );
    }

    /**
     * Test that the code can be executed for "Cube with a hole".
     *
     * @group threeDPrinter_cubeWithAHole
     */
    public function testCanExecuteCubeWithAHole(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - cube with a hole.txt',
            file_get_contents(__DIR__ . '/output/05 - cube with a hole.txt')
        );
    }

    /**
     * Test that the code can be executed for "A mug???".
     *
     * @group threeDPrinter_AMug
     */
    public function testCanExecuteAMug(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - a mug???.txt',
            file_get_contents(__DIR__ . '/output/06 - a mug???.txt')
        );
    }

    /**
     * Test that the code can be executed for "A chair".
     *
     * @group threeDPrinter_AChair
     */
    public function testCanExecuteAChair(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - a chair.txt',
            file_get_contents(__DIR__ . '/output/07 - a chair.txt')
        );
    }
}
