<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Configuration;

use CyrilVerloop\Codingame\Configuration\TestConfiguration;
use CyrilVerloop\Codingame\Configuration\TestConfigurations;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for test configurations.
 */
#[
    PA\CoversClass(TestConfigurations::class),
    PA\UsesClass(TestConfiguration::class),
    PA\Group('configuration'),
    PA\Group('configuration_testConfigurations')
]
final class TestConfigurationsTest extends TestCase
{
    // Methods :

    /**
     * Tests that a configuration can be added.
     */
    public function testCanAddATestConfiguration(): void
    {
        $configuration = new TestConfiguration('name', 'group', 'method', 'file');
        $configurations = new TestConfigurations();
        $configurations->add($configuration);

        self::assertSame($configuration, $configurations->current());
    }
}
