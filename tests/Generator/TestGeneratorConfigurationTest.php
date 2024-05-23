<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\TestGeneratorConfiguration;
use CyrilVerloop\Codingame\Generator\TestConfiguration;
use CyrilVerloop\Codingame\Generator\TestConfigurations;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the generator test configuration.
 */
#[
    PA\CoversClass(TestGeneratorConfiguration::class),
    PA\UsesClass(TestConfiguration::class),
    PA\UsesClass(TestConfigurations::class),
    PA\Group('cgpt'),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_testGeneratorConfiguration')
]
final class TestGeneratorConfigurationTest extends TestCase
{
    // Methods :

    /**
     * Returns the configuration for the test generator.
     * @return TestGeneratorConfiguration the configuration for the test generator.
     */
    public function getTestGeneratorConfiguration(): TestGeneratorConfiguration
    {
        $testConfiguration = new TestConfiguration(
            'a-test-name',
            'a-test-group',
            'a-test-method',
            'a-test-file'
        );

        $testConfigurations = new TestConfigurations();
        $testConfigurations->add($testConfiguration);
        $testConfigurations->add($testConfiguration);

        return new TestGeneratorConfiguration(
            'a-namespace',
            'a-name',
            'a-group',
            $testConfigurations
        );
    }

    /**
     * Tests it has a namespace.
     */
    public function testHasANamespace(): void
    {
        $generatorTestConfiguration = $this->getTestGeneratorConfiguration();

        self::assertSame('a-namespace', $generatorTestConfiguration->getNamespace());
    }

    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $generatorTestConfiguration = $this->getTestGeneratorConfiguration();

        self::assertSame('a-name', $generatorTestConfiguration->getName());
    }

    /**
     * Tests it has a group.
     */
    public function testHasAGroup(): void
    {
        $generatorTestConfiguration = $this->getTestGeneratorConfiguration();

        self::assertSame('a-group', $generatorTestConfiguration->getGroup());
    }

    /**
     * Tests it has test configurations.
     */
    public function testHasTestConfigurations(): void
    {
        $generatorTestConfiguration = $this->getTestGeneratorConfiguration();

        self::assertCount(2, $generatorTestConfiguration->getTestConfigurations());

        foreach ($generatorTestConfiguration->getTestConfigurations() as $testConfiguration) {
            self::assertSame('a-test-name', $testConfiguration->getName());
            self::assertSame('a-test-group', $testConfiguration->getGroup());
            self::assertSame('a-test-method', $testConfiguration->getMethod());
            self::assertSame('a-test-file', $testConfiguration->getFile());
        }
    }
}
