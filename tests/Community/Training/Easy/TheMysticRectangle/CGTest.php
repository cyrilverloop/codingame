<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheMysticRectangle;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TheMysticRectangle\TheMysticRectangle;

/**
 * Tests for the "The mystic rectangle" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheMysticRectangle\TheMysticRectangle
 * @group theMysticRectangle
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheMysticRectangle();
    }

    /**
     * Test that the code can be executed for "Example in description".
     *
     * @group theMysticRectangle_exampleInDescription
     */
    public function testCanExecuteExampleInDescription(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example in description.txt',
            9.5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Horizontal".
     *
     * @group theMysticRectangle_horizontal
     */
    public function testCanExecuteHorizontal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - horizontal.txt',
            1.5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Vertical".
     *
     * @group theMysticRectangle_vertical
     */
    public function testCanExecuteVertical(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - vertical.txt',
            1.2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Diagonal".
     *
     * @group theMysticRectangle_diagonal
     */
    public function testCanExecuteDiagonal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - diagonal.txt',
            2.5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Precision".
     *
     * @group theMysticRectangle_precision
     */
    public function testCanExecutePrecision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - precision.txt',
            "5.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Askew long".
     *
     * @group theMysticRectangle_askewLong
     */
    public function testCanExecuteAskewLong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - askew long.txt',
            11.5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Askew tall".
     *
     * @group theMysticRectangle_askewTall
     */
    public function testCanExecuteAskewTall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - askew tall.txt',
            "12.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "East west wrapper".
     *
     * @group theMysticRectangle_eastWestWrapper
     */
    public function testCanExecuteEastWestWrapper(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - east west wrapper.txt',
            "6.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Double wrapped".
     *
     * @group theMysticRectangle_doubleWrapped
     */
    public function testCanExecuteDoubleWrapped(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - double wrapped.txt',
            "7.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Travel on boundary".
     *
     * @group theMysticRectangle_travelOnBoundary
     */
    public function testCanExecuteTravelOnBoundary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - travel on boundary.txt',
            "16.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Polar opposites".
     *
     * @group theMysticRectangle_polarOpposites
     */
    public function testCanExecutePolarOpposites(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - polar opposites.txt',
            "45.0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random".
     *
     * @group theMysticRectangle_random
     */
    public function testCanExecuteRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - random.txt',
            22.5 . PHP_EOL
        );
    }
}
