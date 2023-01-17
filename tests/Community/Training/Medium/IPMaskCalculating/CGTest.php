<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\IPMaskCalculating;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\IPMaskCalculating\IPMaskCalculating;

/**
 * Tests for the "IP mask calculating" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\IPMaskCalculating\IPMaskCalculating
 * @group IPMaskCalculating
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new IPMaskCalculating();
    }

    /**
     * Test that the code can be executed for "Your ip at home".
     *
     * @group IPMaskCalculating_yourIpAtHome
     */
    public function testCanExecuteYourIpAtHome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - your ip at home.txt',
            file_get_contents(__DIR__ . '/output/01 - your ip at home.txt')
        );
    }

    /**
     * Test that the code can be executed for "Your ip at school".
     *
     * @group IPMaskCalculating_yourIpAtSchool
     */
    public function testCanExecuteYourIpAtSchool(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - your ip at school.txt',
            file_get_contents(__DIR__ . '/output/02 - your ip at school.txt')
        );
    }

    /**
     * Test that the code can be executed for "Not a real network mask".
     *
     * @group IPMaskCalculating_NotARealNetworkMask
     */
    public function testCanExecuteNotARealNetworkMask(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - not a real network mask.txt',
            file_get_contents(__DIR__ . '/output/03 - not a real network mask.txt')
        );
    }

    /**
     * Test that the code can be executed for "Little mask (not a real network mask too)".
     *
     * @group IPMaskCalculating_littleMaskNotARealNetworkMaskToo
     */
    public function testCanExecuteLittleMaskNotARealNetworkMaskToo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - little mask (not a real network mask too).txt',
            file_get_contents(__DIR__ . '/output/04 - little mask (not a real network mask too).txt')
        );
    }

    /**
     * Test that the code can be executed for "255.255.240.0".
     *
     * @group IPMaskCalculating_255.255.240.0
     */
    public function testCanExecute2552552400(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 255.255.240.0.txt',
            file_get_contents(__DIR__ . '/output/05 - 255.255.240.0.txt')
        );
    }

    /**
     * Test that the code can be executed for "254.0.0.0".
     *
     * @group IPMaskCalculating_254.0.0.0
     */
    public function testCanExecute254000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 254.0.0.0.txt',
            file_get_contents(__DIR__ . '/output/06 - 254.0.0.0.txt')
        );
    }

    /**
     * Test that the code can be executed for "A strange IP".
     *
     * @group IPMaskCalculating_aStrangeIP
     */
    public function testCanExecuteAStrangeIP(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - a strange IP.txt',
            file_get_contents(__DIR__ . '/output/07 - a strange IP.txt')
        );
    }

    /**
     * Test that the code can be executed for "42".
     *
     * @group IPMaskCalculating_42
     */
    public function testCanExecute42(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 42.txt',
            file_get_contents(__DIR__ . '/output/08 - 42.txt')
        );
    }
}
