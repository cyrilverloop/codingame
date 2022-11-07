<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BarcodeScanner;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BarcodeScanner\BarcodeScanner;

/**
 * Tests for the "Barcode scanner" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BarcodeScanner\BarcodeScanner
 * @group barcodeScanner
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BarcodeScanner();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group barcodeScanner_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "4003994155486" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ukraine".
     *
     * @group barcodeScanner_ukraine
     */
    public function testCanExecuteUkraine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - ukraine.txt',
            "4820011185802" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Great britain (reversed)".
     *
     * @group barcodeScanner_greatBritainReversed
     */
    public function testCanExecuteGreatBritainReversed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - great britain (reversed).txt',
            "5011386029399" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Germany".
     *
     * @group barcodeScanner_germany
     */
    public function testCanExecuteGermany(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - germany.txt',
            "4012991656698" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wrong checksum".
     *
     * @group barcodeScanner_wrongChecksum
     */
    public function testCanExecuteWrongChecksum(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - wrong checksum.txt',
            "INVALID SCAN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Broken guard(s)".
     *
     * @group barcodeScanner_brokenGuards
     */
    public function testCanExecuteBrokenGuards(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - broken guard(s).txt',
            "INVALID SCAN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Broken parity".
     *
     * @group barcodeScanner_brokenParity
     */
    public function testCanExecuteBrokenParity(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - broken parity.txt',
            "INVALID SCAN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Other error (reversed)".
     *
     * @group barcodeScanner_otherErrorReversed
     */
    public function testCanExecuteOtherErrorReversed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - other error (reversed).txt',
            "INVALID SCAN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Book (reversed)".
     *
     * @group barcodeScanner_bookReversed
     */
    public function testCanExecuteBookReversed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - book (reversed).txt',
            "9785961468748" . PHP_EOL
        );
    }
}
