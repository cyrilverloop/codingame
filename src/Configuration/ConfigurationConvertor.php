<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Configuration;

use CyrilVerloop\Codingame\Generator\GeneratorCodeConfiguration;
use CyrilVerloop\Codingame\Generator\GeneratorTestConfiguration;
use CyrilVerloop\Codingame\Parser\ParsedConfiguration;

final class ConfigurationConvertor
{
    // Methods :

    /**
     * Returns the code configuration for the generator.
     * @param \CyrilVerloop\Codingame\Parser\ParsedConfiguration $parsedConfiguration the parsed configuration.
     * @param string $defaultCodeFile the file with the default code.
     * @return \CyrilVerloop\Codingame\Generator\GeneratorCodeConfiguration the code configuration for the generator.
     * @throws \RuntimeException if the default code file is not readable.
     */
    static function getGeneratorCodeConfiguration(
        ParsedConfiguration $parsedConfiguration,
        string $defaultCodeFile
    ): GeneratorCodeConfiguration {

        if (is_readable($defaultCodeFile) === false) {
            throw new \RuntimeException('defaultCodeFileNotReadable');
        }

        $defaultCode = file_get_contents($defaultCodeFile);
        $spaceAddedCode = preg_replace(
            '/\n/',
            "\n        ",
            $defaultCode
        );
        $indentedDefaultCode = preg_replace(
            '/\n        \n/',
            "\n\n",
            $spaceAddedCode
        );

        return new GeneratorCodeConfiguration(
            $parsedConfiguration->getNamespace(),
            $parsedConfiguration->getName(),
            $parsedConfiguration->getLink(),
            $indentedDefaultCode
        );
    }

    /**
     * Returns the test configuration for the generator.
     * @param \CyrilVerloop\Codingame\Parser\ParsedConfiguration $parsedConfiguration the parsed configuration.
     * @return \CyrilVerloop\Codingame\Generator\GeneratorTestConfiguration the test configuration for the generator.
     */
    static function getGeneratorTestConfiguration(
        ParsedConfiguration $parsedConfiguration,
    ): GeneratorTestConfiguration {
        return new GeneratorTestConfiguration(
            $parsedConfiguration->getNamespace(),
            $parsedConfiguration->getName(),
            $parsedConfiguration->getGroup(),
            $parsedConfiguration->getTestConfigurations()
        );
    }
}
