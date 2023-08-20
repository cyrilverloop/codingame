<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\FrameThePicture;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\FrameThePicture\FrameThePicture;

/**
 * Tests for the "Frame the picture" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\FrameThePicture\FrameThePicture
 * @group frameThePicture
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FrameThePicture();
    }

    /**
     * Test that the code can be executed for "Tiny picture, thin frame".
     *
     * @group frameThePicture_tinyPictureThinFrame
     */
    public function testCanExecuteTinyPictureThinFrame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tiny picture, thin frame.txt',
            file_get_contents(__DIR__ . '/output/01 - tiny picture, thin frame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small picture, thin frame".
     *
     * @group frameThePicture_smallPictureThinFrame
     */
    public function testCanExecuteSmallPictureThinFrame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small picture, thin frame.txt',
            file_get_contents(__DIR__ . '/output/02 - small picture, thin frame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Small picture, 2-character frame".
     *
     * @group frameThePicture_smallPicture2CharacterFrame
     */
    public function testCanExecuteSmallPicture2CharacterFrame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small picture, 2-character frame.txt',
            file_get_contents(__DIR__ . '/output/03 - small picture, 2-character frame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium picture, 3-character frame".
     *
     * @group frameThePicture_mediumPicture3CharacterFrame
     */
    public function testCanExecuteMediumPicture3CharacterFrame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - medium picture, 3-character frame.txt',
            file_get_contents(__DIR__ . '/output/04 - medium picture, 3-character frame.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some art".
     *
     * @group frameThePicture_someArt
     */
    public function testCanExecuteSomeArt(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - some art.txt',
            file_get_contents(__DIR__ . '/output/05 - some art.txt')
        );
    }
}
