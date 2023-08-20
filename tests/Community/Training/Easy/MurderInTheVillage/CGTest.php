<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MurderInTheVillage;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MurderInTheVillage\MurderInTheVillage;

/**
 * Tests for the "Murder in the village!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MurderInTheVillage\MurderInTheVillage
 * @group murderInTheVillage
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MurderInTheVillage();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group murderInTheVillage_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "It was me!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group murderInTheVillage_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "Charles did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group murderInTheVillage_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "Charles did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group murderInTheVillage_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "Lance did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group murderInTheVillage_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "Ben did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group murderInTheVillage_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "Bob did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group murderInTheVillage_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "Hank did it!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group murderInTheVillage_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "Dylan did it!" . PHP_EOL
        );
    }
}
