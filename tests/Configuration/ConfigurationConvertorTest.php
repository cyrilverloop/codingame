<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Configuration;

use CyrilVerloop\Codingame\Configuration\ConfigurationConvertor;
use CyrilVerloop\Codingame\Configuration\TestConfiguration;
use CyrilVerloop\Codingame\Configuration\TestConfigurations;
use CyrilVerloop\Codingame\Parser\ParsedConfiguration;
use CyrilVerloop\Codingame\Generator\GeneratorCodeConfiguration;
use CyrilVerloop\Codingame\Generator\GeneratorTestConfiguration;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the configuration parser.
 */
#[
    PA\CoversClass(ConfigurationConvertor::class),
    PA\UsesClass(GeneratorCodeConfiguration::class),
    PA\UsesClass(GeneratorTestConfiguration::class),
    PA\UsesClass(ParsedConfiguration::class),
    PA\UsesClass(TestConfiguration::class),
    PA\UsesClass(TestConfigurations::class),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_configurationConvertor')
]
final class ConfigurationConvertorTest extends TestCase
{
    // Methods :

    /**
     * Tests that a RuntimeException is thrown
     * if the default code file is not readable.
     */
    public function testThrowsARuntimeExceptionIfTheDefaultCodeFileIsNotReadable(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('defaultCodeFileNotReadable');

        $parsedTestConfiguration = new TestConfiguration(
            'a-test-name',
            'a-test-group',
            'a-test-method',
            'a-test-file'
        );

        $parsedTestConfigurations = new TestConfigurations();
        $parsedTestConfigurations->add($parsedTestConfiguration);

        $parsedConfiguration = new ParsedConfiguration(
            'a-namespace',
            'a-name',
            'a-group',
            'a-link',
            $parsedTestConfigurations
        );

        ConfigurationConvertor::getGeneratorCodeConfiguration($parsedConfiguration, '');
    }

    /**
     * Tests that a parsed configuration
     * can be converted to a code configuration.
     */
    public function testCanConvertAParsedConfigurationToACodeConfiguration(): void
    {
        $parsedTestConfiguration = new TestConfiguration(
            'a-test-name',
            'a-test-group',
            'a-test-method',
            'a-test-file'
        );

        $parsedTestConfigurations = new TestConfigurations();
        $parsedTestConfigurations->add($parsedTestConfiguration);

        $parsedConfiguration = new ParsedConfiguration(
            'a-namespace',
            'a-name',
            'a-group',
            'a-link',
            $parsedTestConfigurations
        );

        $codeConfiguration = ConfigurationConvertor::getGeneratorCodeConfiguration(
            $parsedConfiguration,
            __DIR__ . '/../Generator/Example/CGCode.dist'
        );

        self::assertSame('a-namespace', $codeConfiguration->getNamespace());
        self::assertSame('a-name', $codeConfiguration->getName());
        self::assertSame('a-link', $codeConfiguration->getLink());
        self::assertStringEqualsFile(
            __DIR__ . '/../Generator/Example/CGCodeIndented.dist',
            $codeConfiguration->getDefaultCode()
        );
    }


    /**
     * Tests that a parsed configuration
     * can be converted to a test configuration.
     */
    public function testCanConvertAParsedConfigurationToATestConfiguration(): void
    {
        $parsedTestConfiguration = new TestConfiguration(
            'a-test-name',
            'a-test-group',
            'a-test-method',
            'a-test-file'
        );

        $parsedTestConfigurations = new TestConfigurations();
        $parsedTestConfigurations->add($parsedTestConfiguration);
        $parsedTestConfigurations->add($parsedTestConfiguration);

        $parsedConfiguration = new ParsedConfiguration(
            'a-namespace',
            'a-name',
            'a-group',
            'a-link',
            $parsedTestConfigurations
        );

        $generatorTestConfiguration = ConfigurationConvertor::getGeneratorTestConfiguration($parsedConfiguration);

        self::assertSame('a-namespace', $generatorTestConfiguration->getNamespace());
        self::assertSame('a-name', $generatorTestConfiguration->getName());
        self::assertSame('a-group', $generatorTestConfiguration->getGroup());
        self::assertCount(2, $generatorTestConfiguration->getTestConfigurations());

        foreach ($generatorTestConfiguration->getTestConfigurations() as $testConfiguration) {
            self::assertSame('a-test-name', $testConfiguration->getName());
            self::assertSame('a-test-group', $testConfiguration->getGroup());
            self::assertSame('a-test-method', $testConfiguration->getMethod());
            self::assertSame('a-test-file', $testConfiguration->getFile());
        }
    }
}
