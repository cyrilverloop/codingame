<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\MIMEType;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Easy\MIMEType\MIMEType;

/**
 * Tests for the "MIME Type" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Easy\MIMEType\MIMEType
 * @group MIMEType
 */
final class MIMETypeTest extends PuzzleTest
{
    // Methods :

    /**
     * Initialises tests.
     */
    public function setUp(): void
    {
        $this->puzzle = new MIMEType();
    }

    /**
     * Test that the code can be executed for "Simple example".
     *
     * @group MIMEType_simpleExample
     */
    public function testCanExecuteSimpleExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple example.txt',
            file_get_contents(__DIR__ . '/output/01 - simple example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Unknown MIME types".
     *
     * @group MIMEType_unknownMIMETypes
     */
    public function testCanExecuteUnknownMIMETypes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - unknown MIME types.txt',
            file_get_contents(__DIR__ . '/output/02 - unknown MIME types.txt')
        );
    }

    /**
     * Test that the code can be executed for "Correct division of the extension".
     *
     * @group MIMEType_correctDivisionOfTheExtension
     */
    public function testCanExecuteCorrectDivisionOfTheExtension(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - correct division of the extension.txt',
            file_get_contents(__DIR__ . '/output/03 - correct division of the extension.txt')
        );
    }

    /**
     * Test that the code can be executed for "Consideration of the case (upper or lower)".
     *
     * @group MIMEType_considerationOfTheCase
     */
    public function testCanExecuteConsiderationOfTheCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - consideration of the case (upper or lower).txt',
            file_get_contents(__DIR__ . '/output/04 - consideration of the case (upper or lower).txt')
        );
    }

    /**
     * Test that the code can be executed for "Large dataset".
     *
     * @group MIMEType_largeDataset
     */
    public function testCanExecuteLargeDataset(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - large dataset.txt',
            file_get_contents(__DIR__ . '/output/05 - large dataset.txt')
        );
    }
}
