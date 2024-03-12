<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\HackingAtRobberCity;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\HackingAtRobberCity\HackingAtRobberCity;

/**
 * Tests for the "Hacking at RobberCity" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\HackingAtRobberCity\HackingAtRobberCity
 * @group hackingAtRobberCity
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HackingAtRobberCity();
    }

    /**
     * Test that the code can be executed for "Greetings".
     *
     * @group hackingAtRobberCity_greetings
     */
    public function testCanExecuteGreetings(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - greetings.txt',
            "Hello bob ! How are you ?" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Are you sure about that ?".
     *
     * @group hackingAtRobberCity_areYouSureAboutThat
     */
    public function testCanExecuteAreYouSureAboutThat(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - are you sure about that ?.txt',
            "I'm happy we finally found a way to communicate!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hey ! I'm listening".
     *
     * @group hackingAtRobberCity_heyImListening
     */
    public function testCanExecuteHeyImListening(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hey ! i\'m listening.txt',
            "*these hackers are soooo stupid !!! *" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not a chance !".
     *
     * @group hackingAtRobberCity_notAChance
     */
    public function testCanExecuteNotAChance(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - not a chance !.txt',
            "Hopefully, they won't be an issue anymore" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Who laughs last laughs longest".
     *
     * @group hackingAtRobberCity_whoLaughsLastLaughsLongest
     */
    public function testCanExecuteWhoLaughsLastLaughsLongest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - who laughs last laughs longest.txt',
            "Ha ha ha ha ha !!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THIS is really stupid".
     *
     * @group hackingAtRobberCity_THISIsReallyStupid
     */
    public function testCanExecuteTHISIsReallyStupid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - THIS is really stupid.txt',
            file_get_contents(__DIR__ . '/output/06 - THIS is really stupid.txt')
        );
    }
}
