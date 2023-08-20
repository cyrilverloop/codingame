<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\QuaternionMultiplication;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\QuaternionMultiplication\QuaternionMultiplication;

/**
 * Tests for the "Quaternion multiplication" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\QuaternionMultiplication\QuaternionMultiplication
 * @group quaternionMultiplication
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new QuaternionMultiplication();
    }

    /**
     * Test that the code can be executed for "Small".
     *
     * @group quaternionMultiplication_small
     */
    public function testCanExecuteSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small.txt',
            "i-j" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium".
     *
     * @group quaternionMultiplication_medium
     */
    public function testCanExecuteMedium(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - medium.txt',
            "-9i+11j+k-181" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large".
     *
     * @group quaternionMultiplication_large
     */
    public function testCanExecuteLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - large.txt',
            "-520i-38920j+6800k+7920" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Giant".
     *
     * @group quaternionMultiplication_giant
     */
    public function testCanExecuteGiant(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - giant.txt',
            "11415288i-8751432j-5206896k+9766704" . PHP_EOL
        );
    }
}
