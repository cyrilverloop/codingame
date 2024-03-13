<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CGConfiguration;
use CyrilVerloop\Codingame\Generator\CGTestConfigurations;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for a configuration.
 */
#[
    PA\CoversClass(CGConfiguration::class),
    PA\Group('generator'),
    PA\Group('generator_CGConfiguration')
]
final class CGConfigurationTest extends TestCase
{
    /**
     * Tests it has a namespace.
     */
    public function testHasANamespace(): void
    {
        $testconfigurations = new CGTestConfigurations();
        $configuration = new CGConfiguration(
            'namespace',
            'name',
            'group',
            'link',
            $testconfigurations
        );

        self::assertSame('namespace', $configuration->getNamespace());
    }

    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $testconfigurations = new CGTestConfigurations();
        $configuration = new CGConfiguration(
            'namespace',
            'name',
            'group',
            'link',
            $testconfigurations
        );

        self::assertSame('name', $configuration->getName());
    }

    /**
     * Tests it has a group.
     */
    public function testHasAGroup(): void
    {
        $testconfigurations = new CGTestConfigurations();
        $configuration = new CGConfiguration(
            'namespace',
            'name',
            'group',
            'link',
            $testconfigurations
        );

        self::assertSame('group', $configuration->getGroup());
    }

    /**
     * Tests it has a link.
     */
    public function testHasALink(): void
    {
        $testconfigurations = new CGTestConfigurations();
        $configuration = new CGConfiguration(
            'namespace',
            'name',
            'group',
            'link',
            $testconfigurations
        );

        self::assertSame('link', $configuration->getLink());
    }

    /**
     * Tests it has a CGTestConfigurations.
     */
    public function testHasACGTestConfigurations(): void
    {
        $testconfigurations = new CGTestConfigurations();
        $configuration = new CGConfiguration(
            'namespace',
            'name',
            'group',
            'link',
            $testconfigurations
        );

        self::assertSame($testconfigurations, $configuration->getTestsConfigurations());
    }
}
