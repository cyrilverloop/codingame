<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\IPv6Shortener;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\IPv6Shortener\IPv6Shortener;

/**
 * Tests for the "IPv6 shortener" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\IPv6Shortener\IPv6Shortener
 * @group IPv6Shortener
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new IPv6Shortener();
    }

    /**
     * Test that the code can be executed for "Simple address".
     *
     * @group IPv6Shortener_simpleAddress
     */
    public function testCanExecuteSimpleAddress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple address.txt',
            "2001:0:3c4d:15::db8:1a2b" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Loopback address".
     *
     * @group IPv6Shortener_loopbackAddress
     */
    public function testCanExecuteLoopbackAddress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - loopback address.txt',
            "::1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple zero blocks".
     *
     * @group IPv6Shortener_multipleZeroBlocks
     */
    public function testCanExecuteMultipleZeroBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple zero blocks.txt',
            "2001::1:0:1a2f:1a2b" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No zero blocks".
     *
     * @group IPv6Shortener_noZeroBlocks
     */
    public function testCanExecuteNoZeroBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no zero blocks.txt',
            "2001:2021:ab23:82ae:21:1:1a2f:1a2b" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One zero blocks".
     *
     * @group IPv6Shortener_oneZeroBlocks
     */
    public function testCanExecuteOneZeroBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - one zero blocks.txt',
            "fe80:5c77:3430:7667:0:ce27:43d0:ab34" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No full zero blocks".
     *
     * @group IPv6Shortener_noFullZeroBlocks
     */
    public function testCanExecuteNoFullZeroBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - no full zero blocks.txt',
            "fe80:23:2027:dd:918f:1:23:e68" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zero blocks of same length".
     *
     * @group IPv6Shortener_zeroBlocksOfSameLength
     */
    public function testCanExecuteZeroBlocksOfSameLength(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - zero blocks of same length.txt',
            "::100:0:0:4:aaaa:0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zero blocks at the end".
     *
     * @group IPv6Shortener_zeroBlocksAtTheEnd
     */
    public function testCanExecuteZeroBlocksAtTheEnd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - zero blocks at the end.txt',
            "0:aaaa:a000:0:a:30::" . PHP_EOL
        );
    }
}
