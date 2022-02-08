<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\Unary;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Easy\Unary\Unary;

/**
 * @coversDefaultClass \CyrilVerloop\Codingame\Training\Easy\Unary\Unary
 * @group unary
 */
final class UnaryTest extends PuzzleTest
{
    // Methods :

    /**
     * Initialises tests.
     */
    public function setUp(): void
    {
        $this->puzzle = new Unary();
    }

    /**
     * Test that the code can be executed for "Character C".
     *
     * @covers ::execute
     * @group unary_characterC
     */
    public function testCanExecuteCharacterC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - character C.txt',
            '0 0 00 0000 0 00' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Message CC".
     *
     * @covers ::execute
     * @group unary_messageCC
     */
    public function testCanExecuteMessageCC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - message CC.txt',
            '0 0 00 0000 0 000 00 0000 0 00' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Character %".
     *
     * @covers ::execute
     * @group unary_characterPercentSign
     */
    public function testCanExecuteCharacterPercentSign(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - character %.txt',
            '00 0 0 0 00 00 0 0 00 0 0 0' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Message from Chuck Norris".
     *
     * @covers ::execute
     * @group unary_messageFromChuckNorris
     */
    public function testCanExecuteMessageFromChuckNorris(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - message from Chuck Norris.txt',
            file_get_contents(__DIR__ . '/output/04 - message from Chuck Norris.txt')
        );
    }
}
