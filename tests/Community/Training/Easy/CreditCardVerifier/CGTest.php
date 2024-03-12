<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CreditCardVerifier;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\CreditCardVerifier\CreditCardVerifier;

/**
 * Tests for the "Credit card verifier (Luhn’s algorithm)" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CreditCardVerifier\CreditCardVerifier
 * @group creditCardVerifier
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CreditCardVerifier();
    }

    /**
     * Test that the code can be executed for "Tests".
     *
     * @group creditCardVerifier_tests
     */
    public function testCanExecuteTests(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tests.txt',
            file_get_contents(__DIR__ . '/output/01 - tests.txt')
        );
    }

    /**
     * Test that the code can be executed for "MasterCard".
     *
     * @group creditCardVerifier_MasterCard
     */
    public function testCanExecuteMasterCard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - MasterCard.txt',
            file_get_contents(__DIR__ . '/output/02 - MasterCard.txt')
        );
    }

    /**
     * Test that the code can be executed for "Discover".
     *
     * @group creditCardVerifier_Discover
     */
    public function testCanExecuteDiscover(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - Discover.txt',
            file_get_contents(__DIR__ . '/output/03 - Discover.txt')
        );
    }

    /**
     * Test that the code can be executed for "VISA".
     *
     * @group creditCardVerifier_VISA
     */
    public function testCanExecuteVISA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - VISA.txt',
            file_get_contents(__DIR__ . '/output/04 - VISA.txt')
        );
    }
}
