<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\TestConfiguration;
use CyrilVerloop\Codingame\Generator\TestConfigurations;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for test configurations.
 */
#[
    PA\CoversClass(TestConfigurations::class),
    PA\UsesClass(TestConfiguration::class),
    PA\Group('cgpt'),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_testConfigurations')
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
