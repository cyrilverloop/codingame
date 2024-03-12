<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NextCarLicensePlate;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NextCarLicensePlate\NextCarLicensePlate;

/**
 * Tests for the "Next car license plate ?" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NextCarLicensePlate\NextCarLicensePlate
 * @group nextCarLicensePlate
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NextCarLicensePlate();
    }

    /**
     * Test that the code can be executed for "+5".
     *
     * @group nextCarLicensePlate_plus5
     */
    public function testCanExecutePlus5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - +5.txt',
            "AB-128-CD" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "+100".
     *
     * @group nextCarLicensePlate_plus100
     */
    public function testCanExecutePlus100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - +100.txt',
            "AZ-666-QS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "999+1".
     *
     * @group nextCarLicensePlate_999plus1
     */
    public function testCanExecute999Plus1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 999+1.txt',
            "BN-001-GI" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "+10000".
     *
     * @group nextCarLicensePlate_plus10000
     */
    public function testCanExecutePlus10000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - +10000.txt',
            "CG-017-CQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "+100000".
     *
     * @group nextCarLicensePlate_plus100000
     */
    public function testCanExecutePlus100000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - +100000.txt',
            "IO-110-SE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "+1000000".
     *
     * @group nextCarLicensePlate_plus1000000
     */
    public function testCanExecutePlus1000000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - +1000000.txt',
            "QT-457-PS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Very big".
     *
     * @group nextCarLicensePlate_veryBig
     */
    public function testCanExecuteVeryBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - very big.txt',
            "JQ-027-XY" . PHP_EOL
        );
    }
}
