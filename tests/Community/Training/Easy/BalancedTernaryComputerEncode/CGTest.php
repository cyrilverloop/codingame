<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BalancedTernaryComputerEncode;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BalancedTernaryComputerEncode\BalancedTernaryComputerEncode;

/**
 * Tests for the "Balanced ternary computer: encode" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BalancedTernaryComputerEncode\BalancedTernaryComputerEncode
 * @group balancedTernaryComputerEncode
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BalancedTernaryComputerEncode();
    }

    /**
     * Test that the code can be executed for "Short".
     *
     * @group balancedTernaryComputerEncode_short
     */
    public function testCanExecuteShort(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - short.txt',
            "10T" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Negative".
     *
     * @group balancedTernaryComputerEncode_negative
     */
    public function testCanExecuteNegative(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - negative.txt',
            "T110" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long".
     *
     * @group balancedTernaryComputerEncode_long
     */
    public function testCanExecuteLong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - long.txt',
            "T00TT0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single digit".
     *
     * @group balancedTernaryComputerEncode_singleDigit
     */
    public function testCanExecuteSingleDigit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - single digit.txt',
            0 . PHP_EOL
        );
    }
}
