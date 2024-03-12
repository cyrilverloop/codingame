<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SeamCarving;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SeamCarving\SeamCarving;

/**
 * Tests for the "Seam carving" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SeamCarving\SeamCarving
 * @group seamCarving
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SeamCarving();
    }

    /**
     * Test that the code can be executed for "Height 8 & width -1".
     *
     * @group seamCarving_height8AndWidthMinus1
     */
    public function testCanExecuteHeight8AndWidthMinus1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - height 8 & width -1.txt',
            175 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Height 11 & width -1".
     *
     * @group seamCarving_height11AndWidthMinus1
     */
    public function testCanExecuteHeight11AndWidthMinus1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - height 11 & width -1.txt',
            120 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Height 16 & width -2".
     *
     * @group seamCarving_height16AndWidthMinus2
     */
    public function testCanExecuteHeight16AndWidthMinus2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - height 16 & width -2.txt',
            file_get_contents(__DIR__ . '/output/03 - height 16 & width -2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 19 & width -3".
     *
     * @group seamCarving_height19AndWidthMinus3
     */
    public function testCanExecuteHeight19AndWidthMinus3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - height 19 & width -3.txt',
            file_get_contents(__DIR__ . '/output/04 - height 19 & width -3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 35 & width -10".
     *
     * @group seamCarving_height35AndWidthMinus10
     */
    public function testCanExecuteHeight35AndWidthMinus10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - height 35 & width -10.txt',
            file_get_contents(__DIR__ . '/output/05 - height 35 & width -10.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 37 & width -15".
     *
     * @group seamCarving_height37AndWidthMinus15
     */
    public function testCanExecuteHeight37AndWidthMinus15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - height 37 & width -15.txt',
            file_get_contents(__DIR__ . '/output/06 - height 37 & width -15.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 60 & width -20".
     *
     * @group seamCarving_height60AndWidthMinus20
     */
    public function testCanExecuteHeight60AndWidthMinus20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - height 60 & width -20.txt',
            file_get_contents(__DIR__ . '/output/07 - height 60 & width -20.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 27 & width -25".
     *
     * @group seamCarving_height27AndWidthMinus25
     */
    public function testCanExecuteHeight27AndWidthMinus25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - height 27 & width -25.txt',
            file_get_contents(__DIR__ . '/output/08 - height 27 & width -25.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 38 & width -25".
     *
     * @group seamCarving_height38AndWidthMinus25
     */
    public function testCanExecuteHeight38AndWidthMinus25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - height 38 & width -25.txt',
            file_get_contents(__DIR__ . '/output/09 - height 38 & width -25.txt')
        );
    }

    /**
     * Test that the code can be executed for "Height 35 & width -30".
     *
     * @group seamCarving_height35AndWidthMinus30
     */
    public function testCanExecuteHeight35AndWidthMinus30(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - height 35 & width -30.txt',
            file_get_contents(__DIR__ . '/output/10 - height 35 & width -30.txt')
        );
    }
}
