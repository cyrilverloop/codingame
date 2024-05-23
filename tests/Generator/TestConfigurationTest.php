<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\TestConfiguration;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for a test configuration.
 */
#[
    PA\CoversClass(TestConfiguration::class),
    PA\Group('cgpt'),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_testConfiguration')
]
final class TestConfigurationTest extends TestCase
{
    // Methods :

    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $configuration = new TestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('name', $configuration->getName());
    }

    /**
     * Tests it has a group.
     */
    public function testHasAGroup(): void
    {
        $configuration = new TestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('group', $configuration->getGroup());
    }

    /**
     * Tests it has a method.
     */
    public function testHasAMethod(): void
    {
        $configuration = new TestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('method', $configuration->getMethod());
    }

    /**
     * Tests it has a file.
     */
    public function testHasAFile(): void
    {
        $configuration = new TestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('file', $configuration->getFile());
    }
}
