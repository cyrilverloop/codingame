<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\ASCIIArt;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Easy\ASCIIArt\ASCIIArt;

/**
 * @coversDefaultClass \CyrilVerloop\Codingame\Training\Easy\ASCIIArt\ASCIIArt
 * @group ASCIIArt
 */
final class ASCIIArtTest extends PuzzleTest
{
    // Methods :

    /**
     * Initialises tests.
     */
    public function setUp(): void
    {
        $this->puzzle = new ASCIIArt();
    }

    /**
     * Test that the code can be executed for "Test only one letter: E".
     *
     * @covers ::execute
     * @group ASCIIArt_onlyOneLetterE
     */
    public function testCanExecuteTestOnlyOneLetterE(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test only one letter E.txt',
            file_get_contents(__DIR__ . '/output/01 - test only one letter E.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test MANHATTAN".
     *
     * @covers ::execute
     * @group ASCIIArt_testMANHATTAN
     */
    public function testCanExecuteTestMANHATTAN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test MANHATTAN.txt',
            file_get_contents(__DIR__ . '/output/02 - test MANHATTAN.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test ManhAtTan".
     *
     * @covers ::execute
     * @group ASCIIArt_testManhAtTan
     */
    public function testCanExecuteTestDifferentCaseManhAtTan(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test ManhAtTan.txt',
            file_get_contents(__DIR__ . '/output/03 - test ManhAtTan.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test M@NH@TT@N".
     *
     * @covers ::execute
     * @group ASCIIArt_testM@NH@TT@N
     */
    public function testCanExecuteTestMatNHatTTatN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test M@NH@TT@N.txt',
            file_get_contents(__DIR__ . '/output/04 - test M@NH@TT@N.txt')
        );
    }

    /**
     * Test that the code can be executed for "MANHATTAN with another ASCII representation".
     *
     * @covers ::execute
     * @group ASCIIArt_MANHATTANWithAnotherASCIIRepresentation
     */
    public function testCanExecuteMANHATTANWithAnotherASCIIRepresentation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - MANHATTAN with another ASCII representation.txt',
            file_get_contents(__DIR__ . '/output/05 - MANHATTAN with another ASCII representation.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test MAN HAT TAN".
     *
     * @covers ::execute
     * @group ASCIIArt_TestMAN_HAT_TAN
     */
    public function testCanExecuteTestMAN_HAT_TAN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test MAN HAT TAN.txt',
            file_get_contents(__DIR__ . '/output/06 - test MAN HAT TAN.txt')
        );
    }
}
