<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DisorderedFirstContact;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\DisorderedFirstContact\DisorderedFirstContact;

/**
 * Tests for the "Disordered first contact" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DisorderedFirstContact\DisorderedFirstContact
 * @group disorderedFirstContact
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DisorderedFirstContact();
    }

    /**
     * Test that the code can be executed for "Simple decoding".
     *
     * @group disorderedFirstContact_simpleDecoding
     */
    public function testCanExecuteSimpleDecoding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple decoding.txt',
            "abcdefghi" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple encoding".
     *
     * @group disorderedFirstContact_simpleEncoding
     */
    public function testCanExecuteSimpleEncoding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple encoding.txt',
            "worlelhlo d" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple decoding".
     *
     * @group disorderedFirstContact_multipleDecoding
     */
    public function testCanExecuteMultipleDecoding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple decoding.txt',
            "this is a mutliple encoded text" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple encoding".
     *
     * @group disorderedFirstContact_multipleEncoding
     */
    public function testCanExecuteMultipleEncoding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiple encoding.txt',
            "hrlellwo ods" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long string".
     *
     * @group disorderedFirstContact_longString
     */
    public function testCanExecuteLongString(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long string.txt',
            file_get_contents(__DIR__ . '/output/05 - long string.txt')
        );
    }
}
