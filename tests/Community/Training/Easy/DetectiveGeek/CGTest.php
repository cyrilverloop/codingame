<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\DetectiveGeek;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\DetectiveGeek\DetectiveGeek;

/**
 * Tests for the "Detective geek" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\DetectiveGeek\DetectiveGeek
 * @group detectiveGeek
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DetectiveGeek();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group detectiveGeek_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Algeria".
     *
     * @group detectiveGeek_algeria
     */
    public function testCanExecuteAlgeria(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - algeria.txt',
            file_get_contents(__DIR__ . '/output/02 - algeria.txt')
        );
    }

    /**
     * Test that the code can be executed for "Egypt".
     *
     * @group detectiveGeek_egypt
     */
    public function testCanExecuteEgypt(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - egypt.txt',
            file_get_contents(__DIR__ . '/output/03 - egypt.txt')
        );
    }

    /**
     * Test that the code can be executed for "India".
     *
     * @group detectiveGeek_india
     */
    public function testCanExecuteIndia(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - india.txt',
            file_get_contents(__DIR__ . '/output/04 - india.txt')
        );
    }

    /**
     * Test that the code can be executed for "Japan".
     *
     * @group detectiveGeek_japan
     */
    public function testCanExecuteJapan(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - japan.txt',
            file_get_contents(__DIR__ . '/output/05 - japan.txt')
        );
    }

    /**
     * Test that the code can be executed for "Italy".
     *
     * @group detectiveGeek_italy
     */
    public function testCanExecuteItaly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - italy.txt',
            file_get_contents(__DIR__ . '/output/06 - italy.txt')
        );
    }

    /**
     * Test that the code can be executed for "South korea".
     *
     * @group detectiveGeek_southKorea
     */
    public function testCanExecuteSouthKorea(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - south korea.txt',
            file_get_contents(__DIR__ . '/output/07 - south korea.txt')
        );
    }
}
