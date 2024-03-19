<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\A\Name\Space;

use CyrilVerloop\Codingame\A\Name\Space\CGCode;
use CyrilVerloop\Codingame\Tests\CGTestCase;
use PHPUnit\Framework\Attributes as PA;

/**
 * Tests for the "A name" puzzle.
 */
#[
    PA\CoversClass(CGCode::class),
    PA\Group('AGroup'),
    PA\Medium
]
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->cgCode = new CGCode();
    }

    /**
     * Test that the code can be executed for "test name".
     */
    #[PA\Group('AGroup_testGroup')]
    public function testCanExecuteTestMethod(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test file.txt',
            file_get_contents(__DIR__ . '/output/01 - test file.txt')
        );
    }

    /**
     * Test that the code can be executed for "test name 2".
     */
    #[PA\Group('AGroup_testGroup2')]
    public function testCanExecuteTestMethod2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test file 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test file 2.txt')
        );
    }
}
