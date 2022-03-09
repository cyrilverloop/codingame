<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BinaryImage;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\BinaryImage\BinaryImage;

/**
 * Tests for the "Binary image" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BinaryImage\BinaryImage
 * @group binaryImage
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BinaryImage();
    }

    /**
     * Test that the code can be executed for "Vertical stripes".
     *
     * @group binaryImage_verticalStripes
     */
    public function testCanExecuteVerticalStripes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - vertical stripes.txt',
            file_get_contents(__DIR__ . '/output/01 - vertical stripes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Starting by 0".
     *
     * @group binaryImage_startingBy0
     */
    public function testCanExecuteStartingBy0(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - starting by 0.txt',
            file_get_contents(__DIR__ . '/output/02 - starting by 0.txt')
        );
    }

    /**
     * Test that the code can be executed for "Chess board".
     *
     * @group binaryImage_chessBoard
     */
    public function testCanExecuteChessBoard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - chess board.txt',
            file_get_contents(__DIR__ . '/output/03 - chess board.txt')
        );
    }

    /**
     * Test that the code can be executed for "Horizontal stripes".
     *
     * @group binaryImage_horizontalStripes
     */
    public function testCanExecuteHorizontalStripes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - horizontal stripes.txt',
            file_get_contents(__DIR__ . '/output/04 - horizontal stripes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Codingame".
     *
     * @group binaryImage_codingame
     */
    public function testCanExecuteCodingame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - codingame.txt',
            file_get_contents(__DIR__ . '/output/05 - codingame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Invalid".
     *
     * @group binaryImage_invalid
     */
    public function testCanExecuteInvalid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - invalid.txt',
            'INVALID' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random".
     *
     * @group binaryImage_random
     */
    public function testCanExecuteRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - random.txt',
            file_get_contents(__DIR__ . '/output/07 - random.txt')
        );
    }
}
