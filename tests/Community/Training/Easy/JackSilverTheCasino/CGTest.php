<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\JackSilverTheCasino;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\JackSilverTheCasino\JackSilverTheCasino;

/**
 * Tests for the "Jack Silver: the casino" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\JackSilverTheCasino\JackSilverTheCasino
 * @group jackSilverTheCasino
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new JackSilverTheCasino();
    }

    /**
     * Test that the code can be executed for "Target #1".
     *
     * @group jackSilverTheCasino_target1
     */
    public function testCanExecuteTarget1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - target 1.txt',
            1153 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Target #3".
     *
     * @group jackSilverTheCasino_target3
     */
    public function testCanExecuteTarget3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - target 3.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Target #5".
     *
     * @group jackSilverTheCasino_target5
     */
    public function testCanExecuteTarget5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - target 5.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "0 is not EVEN".
     *
     * @group jackSilverTheCasino_0IsNotEVEN
     */
    public function testCanExecute0IsNotEVEN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 0 is not EVEN.txt',
            359412 . PHP_EOL
        );
    }
}
