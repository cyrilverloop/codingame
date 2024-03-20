<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CGCodeGenerator;
use CyrilVerloop\Codingame\Generator\FileGenerator;
use CyrilVerloop\Codingame\Generator\GeneratorCodeConfiguration;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the code generator.
 */
#[
    PA\CoversClass(CGCodeGenerator::class),
    PA\CoversClass(FileGenerator::class),
    PA\UsesClass(GeneratorCodeConfiguration::class),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_CGCodeGenerator')
]
final class CGCodeGeneratorTest extends TestCase
{
    // Methods :

    /**
     * Tests that the code is generated.
     */
    public function testGenerateTheCodeFile(): void
    {
        $Configuration = new GeneratorCodeConfiguration(
            'A\\Name\\Space',
            'A name',
            'https://a-link',
            file_get_contents(__DIR__ . '/Example/CGCodeIndented.dist')
        );

        $fileSystem = vfsStream::setup();

        $codeGenerator = new CGCodeGenerator(__DIR__ . '/../../templates/');
        $codeGenerator->generate(
            $Configuration,
            $fileSystem->url() . '/src/A/Name/Space/'
        );

        self::assertFileExists($fileSystem->url() . '/src/A/Name/Space/CGCode.php');
        self::assertFileEquals(
            __DIR__ . '/Example/CGCode.php',
            $fileSystem->url() . '/src/A/Name/Space/CGCode.php'
        );
    }


    /**
     * Tests that the code is not generated
     * if it already exist.
     */
    public function testDoNotGenerateTheCodeFileIfItAlreadyExist(): void
    {
        $defaultCode = file_get_contents(__DIR__ . '/Example/CGCode.dist');
        $indentedDefaultCode = preg_replace(
            '/\n\n/',
            "\n\n        ",
            $defaultCode
        );
        $Configuration = new GeneratorCodeConfiguration(
            'A\\Name\\Space',
            'A name',
            'https://a-link',
            $indentedDefaultCode
        );

        $fileStructure = [
            'src' => [
                'A' => [
                    'Name' => [
                        'Space' => [
                            'CGCode.php' => 'modified-code'
                        ]
                    ]
                ]
            ]
        ];
        $fileSystem = vfsStream::setup(structure: $fileStructure);

        $codeGenerator = new CGCodeGenerator(__DIR__ . '/../../templates/');
        $codeGenerator->generate(
            $Configuration,
            $fileSystem->url() . '/src/A/Name/Space/'
        );

        self::assertFileExists($fileSystem->url() . '/src/A/Name/Space/CGCode.php');
        self::assertStringEqualsFile(
            $fileSystem->url() . '/src/A/Name/Space/CGCode.php',
            'modified-code'
        );
    }
}
