<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BlowingFuse;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BlowingFuse\BlowingFuse;

/**
 * Tests for the "Blowing fuse" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BlowingFuse\BlowingFuse
 * @group blowingFuse
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BlowingFuse();
    }

    /**
     * Test that the code can be executed for "Blown".
     *
     * @group blowingFuse_blown
     */
    public function testCanExecuteBlown(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - blown.txt',
            "Fuse was blown." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not blown".
     *
     * @group blowingFuse_notBlown
     */
    public function testCanExecuteNotBlown(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - not blown.txt',
            file_get_contents(__DIR__ . '/output/02 - not blown.txt')
        );
    }

    /**
     * Test that the code can be executed for "Single device".
     *
     * @group blowingFuse_singleDevice
     */
    public function testCanExecuteSingleDevice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - single device.txt',
            "Fuse was blown." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More device".
     *
     * @group blowingFuse_moreDevice
     */
    public function testCanExecuteMoreDevice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - more device.txt',
            file_get_contents(__DIR__ . '/output/04 - more device.txt')
        );
    }

    /**
     * Test that the code can be executed for "More clicks, more devices".
     *
     * @group blowingFuse_moreClicksMoreDevice
     */
    public function testCanExecuteMoreClicksMoreDevice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more clicks, more devices.txt',
            file_get_contents(__DIR__ . '/output/05 - more clicks, more devices.txt')
        );
    }

    /**
     * Test that the code can be executed for "Power hungry".
     *
     * @group blowingFuse_powerHungry
     */
    public function testCanExecutePowerHungry(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - power hungry.txt',
            file_get_contents(__DIR__ . '/output/06 - power hungry.txt')
        );
    }
}
