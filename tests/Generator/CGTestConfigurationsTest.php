<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CGTestConfiguration;
use CyrilVerloop\Codingame\Generator\CGTestConfigurations;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for test configurations.
 */
#[
    PA\CoversClass(CGTestConfigurations::class),
    PA\UsesClass(CGTestConfiguration::class),
    PA\Group('generator'),
    PA\Group('generator_CGTestConfigurations')
]
final class CGTestConfigurationsTest extends TestCase
{
    /**
     * Tests that a configuration can be added.
     */
    public function testCanAddATestConfiguration(): void
    {
        $configuration = new CGTestConfiguration('name', 'group', 'method', 'file');
        $configurations = new CGTestConfigurations();
        $configurations->add($configuration);

        self::assertSame($configuration, $configurations->current());
    }
}
