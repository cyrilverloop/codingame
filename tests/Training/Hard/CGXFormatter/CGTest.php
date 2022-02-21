<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\CGXFormatter;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Hard\CGXFormatter\CGXFormatter;

/**
 * Tests for the "CGX formatter" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\CGXFormatter\CGXFormatter
 * @group CGXFormatter
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new CGXFormatter();
    }

    /**
     * Test that the code can be executed for "Boolean value with spaces and tabs".
     *
     * @group CGXFormatter_booleanValueWithSpacesAndTabs
     */
    public function testCanExecuteBooleanValueWithSpacesAndTabs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - boolean value with spaces and tabs.txt',
            'true'
        );
    }

    /**
     * Test that the code can be executed for "Simple string of characters which must not be modified".
     *
     * @group CGXFormatter_simpleStringOfCharactersWhichMustNotBeModified
     */
    public function testCanExecuteSimpleStringOfCharactersWhichMustNotBeModified(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple string of characters which must not be modified.txt',
            "' Content with spaces and	tabs'"
        );
    }

    /**
     * Test that the code can be executed for "Block containing a single value".
     *
     * @group CGXFormatter_blockContainingASingleValue
     */
    public function testCanExecuteBlockContainingASingleValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - block containing a single value.txt',
            file_get_contents(__DIR__ . '/output/03 - block containing a single value.txt')
        );
    }

    /**
     * Test that the code can be executed for "Block containing a multiple values".
     *
     * @group CGXFormatter_blockContainingMultipleValues
     */
    public function testCanExecuteBlockContainingMultipleValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - block containing a multiple values.txt',
            file_get_contents(__DIR__ . '/output/04 - block containing a multiple values.txt')
        );
    }

    /**
     * Test that the code can be executed for "Nested blocks".
     *
     * @group CGXFormatter_nestedBlocks
     */
    public function testCanExecuteNestedBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - nested blocks.txt',
            file_get_contents(__DIR__ . '/output/05 - nested blocks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Empty block".
     *
     * @group CGXFormatter_emptyBlock
     */
    public function testCanExecuteEmptyBlock(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - empty block.txt',
            file_get_contents(__DIR__ . '/output/06 - empty block.txt')
        );
    }

    /**
     * Test that the code can be executed for "Block containing several blocks".
     *
     * @group CGXFormatter_blockContainingSeveralBlocks
     */
    public function testCanExecuteBlockContainingSeveralBlocks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - block containing several blocks.txt',
            file_get_contents(__DIR__ . '/output/07 - block containing several blocks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Key/value without blanks".
     *
     * @group CGXFormatter_keyValueWithoutBlanks
     */
    public function testCanExecuteKeyValueWithoutBlanks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - key value without blanks.txt',
            file_get_contents(__DIR__ . '/output/08 - key value without blanks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Block with several key/value".
     *
     * @group CGXFormatter_blockWithSeveralKeyValue
     */
    public function testCanExecuteBlockWithSeveralKeyValue(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - block with several key value.txt',
            file_get_contents(__DIR__ . '/output/09 - block with several key value.txt')
        );
    }

    /**
     * Test that the code can be executed for "Example provided".
     *
     * @group CGXFormatter_exampleProvided
     */
    public function testCanExecuteExampleProvided(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - example provided.txt',
            file_get_contents(__DIR__ . '/output/10 - example provided.txt')
        );
    }

    /**
     * Test that the code can be executed for "Full example".
     *
     * @group CGXFormatter_fullExample
     */
    public function testCanExecuteFullExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - full example.txt',
            file_get_contents(__DIR__ . '/output/11 - full example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Numerous overlaps".
     *
     * @group CGXFormatter_numerousOverlaps
     */
    public function testCanExecuteNumerousOverlaps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - numerous overlaps.txt',
            file_get_contents(__DIR__ . '/output/12 - numerous overlaps.txt')
        );
    }
}
