<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PlayfairCipher;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\PlayfairCipher\PlayfairCipher;

/**
 * Tests for the "Playfair cipher" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PlayfairCipher\PlayfairCipher
 * @group playfairCipher
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new PlayfairCipher();
    }

    /**
     * Test that the code can be executed for "Row".
     *
     * @group playfairCipher_row
     */
    public function testCanExecuteRow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - row.txt',
            "IF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Column".
     *
     * @group playfairCipher_column
     */
    public function testCanExecuteColumn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - column.txt',
            "MW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Row and column".
     *
     * @group playfairCipher_rowAndColumn
     */
    public function testCanExecuteRowAndColumn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - row and column.txt',
            file_get_contents(__DIR__ . '/output/03 - row and column.txt')
        );
    }

    /**
     * Test that the code can be executed for "Invalid characters".
     *
     * @group playfairCipher_invalidCharacters
     */
    public function testCanExecuteInvalidCharacters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - invalid characters.txt',
            file_get_contents(__DIR__ . '/output/04 - invalid characters.txt')
        );
    }

    /**
     * Test that the code can be executed for "Decryption".
     *
     * @group playfairCipher_decryption
     */
    public function testCanExecuteDecryption(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - decryption.txt',
            file_get_contents(__DIR__ . '/output/05 - decryption.txt')
        );
    }

    /**
     * Test that the code can be executed for "DUD".
     *
     * @group playfairCipher_DUD
     */
    public function testCanExecuteDUD(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - DUD.txt',
            file_get_contents(__DIR__ . '/output/06 - DUD.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some messages".
     *
     * @group playfairCipher_someMessages
     */
    public function testCanExecuteSomeMessages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - some messages.txt',
            file_get_contents(__DIR__ . '/output/07 - some messages.txt')
        );
    }

    /**
     * Test that the code can be executed for "More messages".
     *
     * @group playfairCipher_moreMessages
     */
    public function testCanExecuteMoreMessages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - more messages.txt',
            file_get_contents(__DIR__ . '/output/08 - more messages.txt')
        );
    }
}
