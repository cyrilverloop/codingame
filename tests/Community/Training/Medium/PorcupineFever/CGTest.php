<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PorcupineFever;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\PorcupineFever\PorcupineFever;

/**
 * Tests for the "Porcupine fever" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PorcupineFever\PorcupineFever
 * @group porcupineFever
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PorcupineFever();
    }

    /**
     * Test that the code can be executed for "One sick cage".
     *
     * @group porcupineFever_oneSickCage
     */
    public function testCanExecuteOneSickCage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one sick cage.txt',
            file_get_contents(__DIR__ . '/output/01 - one sick cage.txt')
        );
    }

    /**
     * Test that the code can be executed for "No porcupines".
     *
     * @group porcupineFever_noPorcupines
     */
    public function testCanExecuteNoPorcupines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no porcupines.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One cage goes extinct".
     *
     * @group porcupineFever_oneCageGoesExtinct
     */
    public function testCanExecuteOneCageGoesExtinct(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one cage goes extinct.txt',
            file_get_contents(__DIR__ . '/output/03 - one cage goes extinct.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dead farm".
     *
     * @group porcupineFever_deadFarm
     */
    public function testCanExecuteDeadFarm(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - dead farm.txt',
            file_get_contents(__DIR__ . '/output/04 - dead farm.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bigger farm".
     *
     * @group porcupineFever_biggerFarm
     */
    public function testCanExecuteBiggerFarm(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - bigger farm.txt',
            file_get_contents(__DIR__ . '/output/05 - bigger farm.txt')
        );
    }
}
