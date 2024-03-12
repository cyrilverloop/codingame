<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\PhotoBoothTransformation;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\PhotoBoothTransformation\PhotoBoothTransformation;

/**
 * Tests for the "Photo booth transformation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\PhotoBoothTransformation\PhotoBoothTransformation
 * @group photoBoothTransformation
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PhotoBoothTransformation();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group photoBoothTransformation_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 10".
     *
     * @group photoBoothTransformation_sizeLTOE10
     */
    public function testCanExecuteSizeLTOE10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - size <= 10.txt',
            file_get_contents(__DIR__ . '/output/02 - size <= 10.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 20".
     *
     * @group photoBoothTransformation_sizeLTOE20
     */
    public function testCanExecuteSizeLTOE20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - size <= 20.txt',
            file_get_contents(__DIR__ . '/output/03 - size <= 20.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 100".
     *
     * @group photoBoothTransformation_sizeLTOE100
     */
    public function testCanExecuteSizeLTOE100(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - size <= 100.txt',
            file_get_contents(__DIR__ . '/output/04 - size <= 100.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 500".
     *
     * @group photoBoothTransformation_sizeLTOE500
     */
    public function testCanExecuteSizeLTOE500(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - size <= 500.txt',
            file_get_contents(__DIR__ . '/output/05 - size <= 500.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 1000".
     *
     * @group photoBoothTransformation_sizeLTOE1000
     */
    public function testCanExecuteSizeLTOE1000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - size <= 1000.txt',
            file_get_contents(__DIR__ . '/output/06 - size <= 1000.txt')
        );
    }

    /**
     * Test that the code can be executed for "Size <= 2000".
     *
     * @group photoBoothTransformation_sizeLTOE2000
     */
    public function testCanExecuteSizeLTOE2000(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - size <= 2000.txt',
            file_get_contents(__DIR__ . '/output/07 - size <= 2000.txt')
        );
    }
}
