<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BankRobbers;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BankRobbers\BankRobbers;

/**
 * Tests for the "Bank robbers" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BankRobbers\BankRobbers
 * @group bankRobbers
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BankRobbers();
    }

    /**
     * Test that the code can be executed for "One robber, one easy vault".
     *
     * @group bankRobbers_oneRobberOneEasyVault
     */
    public function testCanExecuteOneRobberOneEasyVault(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one robber, one easy vault.txt',
            250 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More robbers, more vaults".
     *
     * @group bankRobbers_moreRobbersMoreVaults
     */
    public function testCanExecuteMoreRobbersMoreVaults(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more robbers, more vaults.txt',
            5000000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fewer robbers than vaults".
     *
     * @group bankRobbers_fewerRobbersThanVaults
     */
    public function testCanExecuteFewerRobbersThanVaults(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - fewer robbers than vaults.txt',
            1125 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big heist".
     *
     * @group bankRobbers_bigHeist
     */
    public function testCanExecuteBigHeist(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big heist.txt',
            6515625 . PHP_EOL
        );
    }
}
