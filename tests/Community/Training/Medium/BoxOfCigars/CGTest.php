<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BoxOfCigars;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\BoxOfCigars\BoxOfCigars;

/**
 * Tests for the "Box of cigars" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BoxOfCigars\BoxOfCigars
 * @group boxOfCigars
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BoxOfCigars();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group boxOfCigars_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All valid".
     *
     * @group boxOfCigars_allValid
     */
    public function testCanExecuteAllValid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - all valid.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Common difference = 1".
     *
     * @group boxOfCigars_commonDifference1
     */
    public function testCanExecuteCommonDifference1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - common difference = 1.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big test".
     *
     * @group boxOfCigars_bigTest
     */
    public function testCanExecuteBigTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big test.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "50 cigars".
     *
     * @group boxOfCigars_50Cigars
     */
    public function testCanExecute50Cigars(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 50 cigars.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "100 Cigars!".
     *
     * @group boxOfCigars_100Cigars
     */
    public function testCanExecute100Cigars(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 100 cigars!.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Millionare".
     *
     * @group boxOfCigars_millionare
     */
    public function testCanExecuteMillionare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - millionare.txt',
            19 . PHP_EOL
        );
    }
}
