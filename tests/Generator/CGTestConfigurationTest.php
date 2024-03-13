<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CGTestConfiguration;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for a test configuration.
 */
#[
    PA\CoversClass(CGTestConfiguration::class),
    PA\Group('generator'),
    PA\Group('generator_CGTestConfiguration')
]
final class CGTestConfigurationTest extends TestCase
{
    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $configuration = new CGTestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('name', $configuration->getName());
    }

    /**
     * Tests it has a group.
     */
    public function testHasAGroup(): void
    {
        $configuration = new CGTestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('group', $configuration->getGroup());
    }

    /**
     * Tests it has a method.
     */
    public function testHasAMethod(): void
    {
        $configuration = new CGTestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('method', $configuration->getMethod());
    }

    /**
     * Tests it has a file.
     */
    public function testHasAFile(): void
    {
        $configuration = new CGTestConfiguration('name', 'group', 'method', 'file');

        self::assertSame('file', $configuration->getFile());
    }
}
