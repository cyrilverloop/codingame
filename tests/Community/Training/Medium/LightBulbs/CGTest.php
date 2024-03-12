<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LightBulbs;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LightBulbs\LightBulbs;

/**
 * Tests for the "Light bulbs" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LightBulbs\LightBulbs
 * @group lightBulbs
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LightBulbs();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group lightBulbs_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=5".
     *
     * @group lightBulbs_N5
     */
    public function testCanExecuteN5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - N=5.txt',
            21 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=6".
     *
     * @group lightBulbs_N6
     */
    public function testCanExecuteN6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - N=6.txt',
            26 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=8".
     *
     * @group lightBulbs_N8
     */
    public function testCanExecuteN8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - N=8.txt',
            150 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=11".
     *
     * @group lightBulbs_N11
     */
    public function testCanExecuteN11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - N=11.txt',
            877 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=16".
     *
     * @group lightBulbs_N16
     */
    public function testCanExecuteN16(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - N=16.txt',
            22561 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=19".
     *
     * @group lightBulbs_N19
     */
    public function testCanExecuteN19(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - N=19.txt',
            197520 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=22".
     *
     * @group lightBulbs_N22
     */
    public function testCanExecuteN22(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - N=22.txt',
            1505423 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N=25".
     *
     * @group lightBulbs_N25
     */
    public function testCanExecuteN25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - N=25.txt',
            15832091 . PHP_EOL
        );
    }
}
