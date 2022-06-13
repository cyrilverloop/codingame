<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SubstitutionEncoding;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SubstitutionEncoding\SubstitutionEncoding;

/**
 * Tests for the "Substitution encoding" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SubstitutionEncoding\SubstitutionEncoding
 * @group substitutionEncoding
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SubstitutionEncoding();
    }

    /**
     * Test that the code can be executed for "ABC".
     *
     * @group substitutionEncoding_ABC
     */
    public function testCanExecuteABC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - ABC.txt',
            "100100" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Alphabet".
     *
     * @group substitutionEncoding_alphabet
     */
    public function testCanExecuteAlphabet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - alphabet.txt',
            "07041212152415181203" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reverse alphabet".
     *
     * @group substitutionEncoding_reverseAlphabet
     */
    public function testCanExecuteReverseAlphabet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - reverse alphabet.txt',
            "42513232230323203252" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Serious encode".
     *
     * @group substitutionEncoding_seriousEncode
     */
    public function testCanExecuteSeriousEncode(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - serious encode.txt',
            "323343523141542234" . PHP_EOL
        );
    }
}
