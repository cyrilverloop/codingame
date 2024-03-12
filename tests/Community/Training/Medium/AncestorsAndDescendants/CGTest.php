<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\AncestorsAndDescendants;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\AncestorsAndDescendants\AncestorsAndDescendants;

/**
 * Tests for the "Ancestors & descendants" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\AncestorsAndDescendants\AncestorsAndDescendants
 * @group ancestorsAndDescendants
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AncestorsAndDescendants();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group ancestorsAndDescendants_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group ancestorsAndDescendants_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group ancestorsAndDescendants_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group ancestorsAndDescendants_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group ancestorsAndDescendants_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group ancestorsAndDescendants_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            file_get_contents(__DIR__ . '/output/06 - test 6.txt')
        );
    }
}
