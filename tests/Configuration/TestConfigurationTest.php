<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Configuration;

use CyrilVerloop\Codingame\Configuration\TestConfiguration;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for a test configuration.
 */
#[
    PA\CoversClass(TestConfiguration::class),
    PA\Group('cgpt'),
    PA\Group('cgpt_configuration'),
    PA\Group('cgpt_configuration_testConfiguration')
]
final class TestConfigurationTest extends TestCase
{
    // Methods :

    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $configuration = new TestConfiguration('name', 'alphanumName', 'file');

        self::assertSame('name', $configuration->getName());
    }

    /**
     * Tests it has an alphanum name.
     */
    public function testHasAnAlphanumName(): void
    {
        $configuration = new TestConfiguration('name', 'alphanumName', 'file');

        self::assertSame('alphanumName', $configuration->getAlphanumName());
    }

    /**
     * Tests it has a file.
     */
    public function testHasAFile(): void
    {
        $configuration = new TestConfiguration('name', 'alphanumName', 'file');

        self::assertSame('file', $configuration->getFile());
    }
}
