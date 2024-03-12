<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Buzzle;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\Buzzle\Buzzle;

/**
 * Tests for the "Buzzle" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Buzzle\Buzzle
 * @group buzzle
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Buzzle();
    }

    /**
     * Test that the code can be executed for "Test 1 - Level 1+".
     *
     * @group buzzle_test1Level1
     */
    public function testCanExecuteTest1Level1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1 - level 1+.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1 - level 1+.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2 - Level 2+".
     *
     * @group buzzle_test2Level2
     */
    public function testCanExecuteTest2Level2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2 - level 2+.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2 - level 2+.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3 - Level 3+".
     *
     * @group buzzle_test3Level3
     */
    public function testCanExecuteTest3Level3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3 - level 3+.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3 - level 3+.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4 - Level 4".
     *
     * @group buzzle_test4Level4
     */
    public function testCanExecuteTest4Level4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4 - level 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4 - level 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5 - Level 4".
     *
     * @group buzzle_test5Level4
     */
    public function testCanExecuteTest5Level4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5 - level 4.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5 - level 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Everything is buzzle".
     *
     * @group buzzle_everythingIsBuzzle
     */
    public function testCanExecuteEverythingIsBuzzle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - everything is buzzle.txt',
            file_get_contents(__DIR__ . '/output/06 - everything is buzzle.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ternary".
     *
     * @group buzzle_ternary
     */
    public function testCanExecuteTernary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - ternary.txt',
            file_get_contents(__DIR__ . '/output/07 - ternary.txt')
        );
    }
}
