<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CGConfiguration;
use CyrilVerloop\Codingame\Generator\CGConfigurationParser;
use CyrilVerloop\Codingame\Generator\CGTestConfiguration;
use CyrilVerloop\Codingame\Generator\CGTestConfigurations;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the configuration parser.
 */
#[
    PA\CoversClass(CGConfigurationParser::class),
    PA\UsesClass(CGConfiguration::class),
    PA\UsesClass(CGTestConfiguration::class),
    PA\UsesClass(CGTestConfigurations::class),
    PA\Group('generator'),
    PA\Group('generator_CGConfigurationParser')
]
final class CGConfigurationParserTest extends TestCase
{
    // Méthodes :

    /**
     * Tests that a runtime exception is thrown
     * when the file does not exist.
     */
    public function testThrowsARuntimeExceptionWhenTheFileDoesNotExist(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('fileNotExist');

        $fileSystem = vfsStream::setup('', null, []);

        $CGConfigurationParser = new CGConfigurationParser();
        $CGConfigurationParser->getCGConfigurationFromFile($fileSystem->url('/') . 'config.json');
    }


    /**
     * Returns the test structure.
     * @return array the test structure.
     */
    private function getTestStructure(): array
    {
        return [
            'name' => 'a-test-name',
            'group' => 'a-test-group',
            'method' => 'a-test-method',
            'file' => 'a-test-file'
        ];
    }

    /**
     * Returns the configuration.
     * @return array the configuration.
     */
    private function getConfiguration(): array
    {
        return [
            'namespace' => 'A\Namespace',
            'name' => 'a-name',
            'group' => 'a-group',
            'link' => 'a-link',
            'tests' => [
                json_decode(json_encode($this->getTestStructure()))
            ],
        ];
    }

    /**
     * Tests that a configuration file with one test can be parsed.
     */
    public function testCanParseAOneTestCGConfigurationFromFile(): void
    {
        $fileStructure = [
            'config.json' => json_encode($this->getConfiguration())
        ];
        $fileSystem = vfsStream::setup('', null, $fileStructure);

        $CGConfigurationParser = new CGConfigurationParser();
        $CGConfiguration = $CGConfigurationParser->getCGConfigurationFromFile($fileSystem->url('/') . 'config.json');

        self::assertSame('A\Namespace', $CGConfiguration->getNamespace());
        self::assertSame('a-name', $CGConfiguration->getName());
        self::assertSame('a-group', $CGConfiguration->getGroup());
        self::assertSame('a-link', $CGConfiguration->getLink());

        $testConfigurations = $CGConfiguration->getTestConfigurations();

        self::assertCount(1, $testConfigurations);

        $testConfiguration = $testConfigurations->current();

        self::assertSame('a-test-name', $testConfiguration->getName());
        self::assertSame('a-test-group', $testConfiguration->getGroup());
        self::assertSame('a-test-method', $testConfiguration->getMethod());
        self::assertSame('a-test-file', $testConfiguration->getFile());
    }

    /**
     * Tests that a configuration file with two tests can be parsed.
     */
    public function testCanParseATwoTestsCGConfigurationFromFile(): void
    {
        $configuration = $this->getConfiguration();
        $configuration['tests'][] = $this->getTestStructure();
        $fileStructure = [
            'config.json' => json_encode($configuration)
        ];
        $fileSystem = vfsStream::setup('', null, $fileStructure);

        $CGConfigurationParser = new CGConfigurationParser();
        $CGConfiguration = $CGConfigurationParser->getCGConfigurationFromFile($fileSystem->url('/') . 'config.json');

        self::assertSame('A\Namespace', $CGConfiguration->getNamespace());
        self::assertSame('a-name', $CGConfiguration->getName());
        self::assertSame('a-group', $CGConfiguration->getGroup());
        self::assertSame('a-link', $CGConfiguration->getLink());

        $testConfigurations = $CGConfiguration->getTestConfigurations();

        self::assertCount(2, $testConfigurations);

        self::assertFalse($testConfigurations->currentIsLast());

        foreach ($testConfigurations as $testConfiguration) {
            self::assertSame('a-test-name', $testConfiguration->getName());
            self::assertSame('a-test-group', $testConfiguration->getGroup());
            self::assertSame('a-test-method', $testConfiguration->getMethod());
            self::assertSame('a-test-file', $testConfiguration->getFile());
        }
    }
}
