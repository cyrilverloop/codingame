<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HiddenMessagesInImages;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\HiddenMessagesInImages\HiddenMessagesInImages;

/**
 * Tests for the "Hidden messages in images" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HiddenMessagesInImages\HiddenMessagesInImages
 * @group hiddenMessagesInImages
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new HiddenMessagesInImages();
    }

    /**
     * Test that the code can be executed for "Hello World!".
     *
     * @group hiddenMessagesInImages_helloWorld
     */
    public function testCanExecuteHelloWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - hello world!.txt',
            "Hello World!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "This is a lot of fun!".
     *
     * @group hiddenMessagesInImages_thisIsALotOfFun
     */
    public function testCanExecuteThisIsALotOfFun(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - this is a lot of fun!.txt',
            "This is a lot of fun!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I learned something new with this puzzle".
     *
     * @group hiddenMessagesInImages_iLearnedSomethingNewWithThisPuzzle
     */
    public function testCanExecuteILearnedSomethingNewWithThisPuzzle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - i learned something new with this puzzle.txt',
            "I learned something new with this puzzle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I will hide messages in all my photos".
     *
     * @group hiddenMessagesInImages_iWillHideMessagesInAllMyPhotos
     */
    public function testCanExecuteIWillHideMessagesInAllMyPhotos(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - i will hide messages in all my photos.txt',
            "I will hide messages in all my photos" . PHP_EOL
        );
    }
}
