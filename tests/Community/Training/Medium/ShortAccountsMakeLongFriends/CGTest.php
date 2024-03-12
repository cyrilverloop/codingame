<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ShortAccountsMakeLongFriends;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ShortAccountsMakeLongFriends\ShortAccountsMakeLongFriends;

/**
 * Tests for the "Short accounts make long friends" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ShortAccountsMakeLongFriends\ShortAccountsMakeLongFriends
 * @group shortAccountsMakeLongFriends
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ShortAccountsMakeLongFriends();
    }

    /**
     * Test that the code can be executed for "Very simple".
     *
     * @group shortAccountsMakeLongFriends_verySimple
     */
    public function testCanExecuteVerySimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - very simple.txt',
            file_get_contents(__DIR__ . '/output/01 - very simple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bad bad bad".
     *
     * @group shortAccountsMakeLongFriends_badBadBad
     */
    public function testCanExecuteBadBadBad(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - bad bad bad.txt',
            file_get_contents(__DIR__ . '/output/02 - bad bad bad.txt')
        );
    }

    /**
     * Test that the code can be executed for "425".
     *
     * @group shortAccountsMakeLongFriends_425
     */
    public function testCanExecute425(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 425.txt',
            file_get_contents(__DIR__ . '/output/03 - 425.txt')
        );
    }

    /**
     * Test that the code can be executed for "889".
     *
     * @group shortAccountsMakeLongFriends_889
     */
    public function testCanExecute889(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 889.txt',
            file_get_contents(__DIR__ . '/output/04 - 889.txt')
        );
    }

    /**
     * Test that the code can be executed for "A division?".
     *
     * @group shortAccountsMakeLongFriends_aDivision
     */
    public function testCanExecuteADivision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - a division?.txt',
            file_get_contents(__DIR__ . '/output/05 - a division?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Another division".
     *
     * @group shortAccountsMakeLongFriends_anotherDivision
     */
    public function testCanExecuteAnotherDivision(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - another division.txt',
            file_get_contents(__DIR__ . '/output/06 - another division.txt')
        );
    }
}
