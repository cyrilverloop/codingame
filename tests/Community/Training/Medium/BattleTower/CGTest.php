<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BattleTower;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BattleTower\BattleTower;

/**
 * Tests for the "Battle tower" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BattleTower\BattleTower
 * @group battleTower
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BattleTower();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group battleTower_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mini".
     *
     * @group battleTower_mini
     */
    public function testCanExecuteMini(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - mini.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Line".
     *
     * @group battleTower_line
     */
    public function testCanExecuteLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - line.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Star".
     *
     * @group battleTower_star
     */
    public function testCanExecuteStar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - star.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium 1".
     *
     * @group battleTower_medium1
     */
    public function testCanExecuteMedium1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - medium 1.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium 2".
     *
     * @group battleTower_medium2
     */
    public function testCanExecuteMedium2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - medium 2.txt',
            50 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium 3".
     *
     * @group battleTower_medium3
     */
    public function testCanExecuteMedium3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - medium 3.txt',
            96 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Dense 1".
     *
     * @group battleTower_dense1
     */
    public function testCanExecuteDense1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - dense 1.txt',
            146 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Dense 2".
     *
     * @group battleTower_dense2
     */
    public function testCanExecuteDense2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - dense 2.txt',
            143 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Dense 3".
     *
     * @group battleTower_dense3
     */
    public function testCanExecuteDense3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - dense 3.txt',
            189 . PHP_EOL
        );
    }
}
