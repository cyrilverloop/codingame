<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\EncryptionDecryptionOfEnigmaMachine;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\EncryptionDecryptionOfEnigmaMachine\EncryptionDecryptionOfEnigmaMachine;

/**
 * Tests for the "Encryption/decryption of Enigma machine" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\EncryptionDecryptionOfEnigmaMachine\EncryptionDecryptionOfEnigmaMachine
 * @group encryptionDecryptionOfEnigmaMachine
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new EncryptionDecryptionOfEnigmaMachine();
    }

    /**
     * Test that the code can be executed for "Encode 3".
     *
     * @group encryptionDecryptionOfEnigmaMachine_encode3
     */
    public function testCanExecuteEncode3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - encode 3.txt',
            "KQF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Encode 23".
     *
     * @group encryptionDecryptionOfEnigmaMachine_encode23
     */
    public function testCanExecuteEncode23(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - encode 23.txt',
            "ALWAURKQEQQWLRAWZHUYKVN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Decode 21".
     *
     * @group encryptionDecryptionOfEnigmaMachine_decode21
     */
    public function testCanExecuteDecode21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - decode 21.txt',
            "EVERYONEISWELCOMEHERE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Encode 21".
     *
     * @group encryptionDecryptionOfEnigmaMachine_encode21
     */
    public function testCanExecuteEncode21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - encode 21.txt',
            "PQSACVVTOISXFXCIAMQEM" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Encode 42".
     *
     * @group encryptionDecryptionOfEnigmaMachine_encode42
     */
    public function testCanExecuteEncode42(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - encode 42.txt',
            "PQSACVVTOISXFXCIAMQEMDZIXFJJSTQIENEFQXVZYV" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Decode 49".
     *
     * @group encryptionDecryptionOfEnigmaMachine_decode49
     */
    public function testCanExecuteDecode49(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - decode 49.txt',
            "THEQUICKBROWNFOXJUMPSOVERALAZYSPHINXOFBLACKQUARTZ" . PHP_EOL
        );
    }
}
