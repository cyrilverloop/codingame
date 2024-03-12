<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MayTheTriforceBeWithYou;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MayTheTriforceBeWithYou\MayTheTriforceBeWithYou;

/**
 * Tests for the "May the Triforce be with you!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MayTheTriforceBeWithYou\MayTheTriforceBeWithYou
 * @group mayTheTriforceBeWithYou
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MayTheTriforceBeWithYou();
    }

    /**
     * Test that the code can be executed for "N = 1".
     *
     * @group mayTheTriforceBeWithYou_n1
     */
    public function testCanExecuteN1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - N=1.txt',
            file_get_contents(__DIR__ . '/output/01 - N=1.txt')
        );
    }

    /**
     * Test that the code can be executed for "N = 3".
     *
     * @group mayTheTriforceBeWithYou_n3
     */
    public function testCanExecuteN3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - N=3.txt',
            file_get_contents(__DIR__ . '/output/02 - N=3.txt')
        );
    }

    /**
     * Test that the code can be executed for "N = 5".
     *
     * @group mayTheTriforceBeWithYou_n5
     */
    public function testCanExecuteN5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - N=5.txt',
            file_get_contents(__DIR__ . '/output/03 - N=5.txt')
        );
    }

    /**
     * Test that the code can be executed for "N = 10".
     *
     * @group mayTheTriforceBeWithYou_n10
     */
    public function testCanExecuteN10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - N=10.txt',
            file_get_contents(__DIR__ . '/output/04 - N=10.txt')
        );
    }
}
