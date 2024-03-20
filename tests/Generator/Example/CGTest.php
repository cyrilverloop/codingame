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
    PA\Group('cgpt_AGroup'),
    PA\TestDox('A name'),
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
    #[
        PA\Group('cgpt_AGroup_testGroup'),
        PA\TestDox('test name')
    ]
    public function testTestMethod(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test file.txt',
            file_get_contents(__DIR__ . '/output/01 - test file.txt')
        );
    }

    /**
     * Test that the code can be executed for "test name 2".
     */
    #[
        PA\Group('cgpt_AGroup_testGroup2'),
        PA\TestDox('test name 2')
    ]
    public function testTestMethod2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test file 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test file 2.txt')
        );
    }
}
