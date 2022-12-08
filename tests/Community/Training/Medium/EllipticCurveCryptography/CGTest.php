<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\EllipticCurveCryptography;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\EllipticCurveCryptography\EllipticCurveCryptography;

/**
 * Tests for the "Elliptic curve cryptography" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\EllipticCurveCryptography\EllipticCurveCryptography
 * @group ellipticCurveCryptography
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new EllipticCurveCryptography();
    }

    /**
     * Test that the code can be executed for "Small unique".
     *
     * @group ellipticCurveCryptography_smallUnique
     */
    public function testCanExecuteSmallUnique(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small unique.txt',
            "0x2544b2250b8b1e1c" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small multiple".
     *
     * @group ellipticCurveCryptography_smallMultiple
     */
    public function testCanExecuteSmallMultiple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - small multiple.txt',
            file_get_contents(__DIR__ . '/output/02 - small multiple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium multiple".
     *
     * @group ellipticCurveCryptography_mediumMultiple
     */
    public function testCanExecuteMediumMultiple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - Medium multiple.txt',
            file_get_contents(__DIR__ . '/output/03 - Medium multiple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long unique".
     *
     * @group ellipticCurveCryptography_longUnique
     */
    public function testCanExecuteLongUnique(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - long unique.txt',
            "0x26f5eb3181bfeddf" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long multiple".
     *
     * @group ellipticCurveCryptography_longMultiple
     */
    public function testCanExecuteLongMultiple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long multiple.txt',
            file_get_contents(__DIR__ . '/output/05 - long multiple.txt')
        );
    }
}
