<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BulkEmailGenerator;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BulkEmailGenerator\BulkEmailGenerator;

/**
 * Tests for the "Bulk email generator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BulkEmailGenerator\BulkEmailGenerator
 * @group bulkEmailGenerator
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BulkEmailGenerator();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bulkEmailGenerator_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "CG email".
     *
     * @group bulkEmailGenerator_CGEmail
     */
    public function testCanExecuteCGEmail(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - CG email.txt',
            file_get_contents(__DIR__ . '/output/02 - CG email.txt')
        );
    }

    /**
     * Test that the code can be executed for "Edge cases".
     *
     * @group bulkEmailGenerator_edgeCases
     */
    public function testCanExecuteEdgeCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - edge cases.txt',
            file_get_contents(__DIR__ . '/output/03 - edge cases.txt')
        );
    }

    /**
     * Test that the code can be executed for "Comment spam".
     *
     * @group bulkEmailGenerator_commentSpam
     */
    public function testCanExecuteCommentSpam(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - comment spam.txt',
            file_get_contents(__DIR__ . '/output/04 - comment spam.txt')
        );
    }

    /**
     * Test that the code can be executed for "More edge cases".
     *
     * @group bulkEmailGenerator_moreEdgeCases
     */
    public function testCanExecuteMoreEdgeCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more edge cases.txt',
            file_get_contents(__DIR__ . '/output/05 - more edge cases.txt')
        );
    }
}
