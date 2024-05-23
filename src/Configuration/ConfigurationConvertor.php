<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Configuration;

use CyrilVerloop\Codingame\Configuration\TestConfigurations;
use CyrilVerloop\Codingame\Generator\TestConfiguration as TCGenerator;
use CyrilVerloop\Codingame\Generator\TestConfigurations as TCsGenerator;
use CyrilVerloop\Codingame\Generator\CodeGeneratorConfiguration;
use CyrilVerloop\Codingame\Generator\TestGeneratorConfiguration;
use CyrilVerloop\Codingame\Parser\ParsedConfiguration;

final class ConfigurationConvertor
{
    // Methods :

    /**
     * Returns the code configuration for the generator.
     * @param \CyrilVerloop\Codingame\Parser\ParsedConfiguration $parsedConfiguration the parsed configuration.
     * @param string $defaultCodeFile the file with the default code.
     * @return \CyrilVerloop\Codingame\Generator\CodeGeneratorConfiguration the code configuration for the generator.
     * @throws \RuntimeException if the default code file is not readable.
     */
    static function getCodeGeneratorConfiguration(
        ParsedConfiguration $parsedConfiguration,
        string $defaultCodeFile
    ): CodeGeneratorConfiguration {

        if (is_readable($defaultCodeFile) === false) {
            throw new \RuntimeException('defaultCodeFileNotReadable');
        }

        $defaultCode = file_get_contents($defaultCodeFile);

        return new CodeGeneratorConfiguration(
            self::convertPathToNamespace($parsedConfiguration->getPath()),
            $parsedConfiguration->getName(),
            $parsedConfiguration->getLink(),
            self::adaptCodeForCodeGenerator($defaultCode)
        );
    }

    /**
     * Converts a path to a namespace.
     * @param string $path the path.
     * @return string the namespace.
     */
    private static function convertPathToNamespace(string $path): string
    {
        $explodedPath = explode('/', $path);

        foreach ($explodedPath as $index => $pathSection) {
            $explodedPath[$index] = ucfirst($pathSection);
        }

        return implode('\\', $explodedPath);
    }

    /**
     * Adapts the code for the code generator.
     * @param string $defaultCode the default code.
     * @return string the adapted code.
     */
    private static function adaptCodeForCodeGenerator(string $defaultCode): string
    {
        // Removes the PHP open tag :
        $openTagRemovedCode = preg_replace(
            '/<\?php\n/',
            '',
            $defaultCode
        );

        // Changes "STDIN" to "$stdin" :
        $changedStdinCode = preg_replace(
            '/STDIN/',
            '$stdin',
            $openTagRemovedCode
        );

        // Adds indentation :
        $spaceAddedCode = preg_replace(
            '/\n/',
            "\n        ",
            $changedStdinCode
        );

        // Removes indentation for empty lines :
        return preg_replace(
            '/\n        \n/',
            "\n\n",
            $spaceAddedCode
        );
    }


    /**
     * Returns the test configuration for the generator.
     * @param \CyrilVerloop\Codingame\Parser\ParsedConfiguration $parsedConfiguration the parsed configuration.
     * @return \CyrilVerloop\Codingame\Generator\TestGeneratorConfiguration the test configuration for the generator.
     */
    static function getTestGeneratorConfiguration(
        ParsedConfiguration $parsedConfiguration,
    ): TestGeneratorConfiguration {
        return new TestGeneratorConfiguration(
            self::convertPathToNamespace($parsedConfiguration->getPath()),
            $parsedConfiguration->getName(),
            $parsedConfiguration->getAlphanumName(),
            self::convertTestConfigurationsForGenerator($parsedConfiguration->getTestConfigurations())
        );
    }

    /**
     * Converts the tests configurations.
     * @param TestConfigurations $testConfigurations the tests configurations.
     * @return \CyrilVerloop\Codingame\Generator\TestConfigurations the tests configurations.
     */
    private static function convertTestConfigurationsForGenerator(
        TestConfigurations $testConfigurations
    ): TCsGenerator {
        $tCsGenerator = new TCsGenerator();

        foreach ($testConfigurations as $testConfiguration) {
            $tCGenerator = new TCGenerator(
                $testConfiguration->getName(),
                $testConfiguration->getAlphanumName(),
                ucfirst($testConfiguration->getAlphanumName()),
                $testConfiguration->getFile()
            );

            $tCsGenerator->add($tCGenerator);
        }

        return $tCsGenerator;
    }
}
