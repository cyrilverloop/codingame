<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OrderOfSuccession;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OrderOfSuccession\OrderOfSuccession;

/**
 * Tests for the "orDer oF succeSsion" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OrderOfSuccession\OrderOfSuccession
 * @group orderOfSuccession
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OrderOfSuccession();
    }

    /**
     * Test that the code can be executed for "A simple tree".
     *
     * @group orderOfSuccession_aSimpleTree
     */
    public function testCanExecuteASimpleTree(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple tree.txt',
            file_get_contents(__DIR__ . '/output/01 - a simple tree.txt')
        );
    }

    /**
     * Test that the code can be executed for "Full Elizabeth tree".
     *
     * @group orderOfSuccession_fullElizabethTree
     */
    public function testCanExecuteFullElizabethTree(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - full Elizabeth tree.txt',
            file_get_contents(__DIR__ . '/output/02 - full Elizabeth tree.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dead people".
     *
     * @group orderOfSuccession_deadPeople
     */
    public function testCanExecuteDeadPeople(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - dead people.txt',
            file_get_contents(__DIR__ . '/output/03 - dead people.txt')
        );
    }

    /**
     * Test that the code can be executed for "Non anglican people".
     *
     * @group orderOfSuccession_nonAnglicanPeople
     */
    public function testCanExecuteNonAnglicanPeople(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - non anglican people.txt',
            file_get_contents(__DIR__ . '/output/04 - non anglican people.txt')
        );
    }
}
