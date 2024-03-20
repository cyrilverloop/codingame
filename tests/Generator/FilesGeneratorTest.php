<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Configuration\ConfigurationConvertor;
use CyrilVerloop\Codingame\Configuration\TestConfiguration;
use CyrilVerloop\Codingame\Configuration\TestConfigurations;
use CyrilVerloop\Codingame\Generator\CGCodeGenerator;
use CyrilVerloop\Codingame\Generator\CGTestGenerator;
use CyrilVerloop\Codingame\Generator\FileGenerator;
use CyrilVerloop\Codingame\Generator\FilesGenerator;
use CyrilVerloop\Codingame\Generator\GeneratorCodeConfiguration;
use CyrilVerloop\Codingame\Generator\GeneratorTestConfiguration;
use CyrilVerloop\Codingame\Parser\ConfigurationParser;
use CyrilVerloop\Codingame\Parser\ParsedConfiguration;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the files generator.
 */
#[
    PA\CoversClass(FilesGenerator::class),
    PA\UsesClass(CGCodeGenerator::class),
    PA\UsesClass(CGTestGenerator::class),
    PA\UsesClass(ConfigurationConvertor::class),
    PA\UsesClass(ConfigurationParser::class),
    PA\UsesClass(FileGenerator::class),
    PA\UsesClass(GeneratorCodeConfiguration::class),
    PA\UsesClass(GeneratorTestConfiguration::class),
    PA\UsesClass(ParsedConfiguration::class),
    PA\UsesClass(TestConfiguration::class),
    PA\UsesClass(TestConfigurations::class),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_codeAndTestGenerator')
]
final class FilesGeneratorTest extends TestCase
{
    // Methods :

    /**
     * Returns the file structure.
     * @return mixed[] the file structure.
     */
    public function getFileStructure(): array
    {
        return [
            'config' => [
                'Example' => [
                    'input' => [
                        '01 - test file.txt' => file_get_contents(__DIR__ . '/Example/input/01 - test file.txt'),
                        '02 - test file 2.txt' => file_get_contents(__DIR__ . '/Example/input/02 - test file 2.txt')
                    ],
                    'output' => [
                        '01 - test file.txt' => file_get_contents(__DIR__ . '/Example/output/01 - test file.txt'),
                        '02 - test file 2.txt' => file_get_contents(__DIR__ . '/Example/output/02 - test file 2.txt')
                    ],
                    'config.json' => file_get_contents(__DIR__ . '/Example/config.json'),
                    'CGCode.dist' => file_get_contents(__DIR__ . '/Example/CGCode.dist')
                ],
                'Example2' => [
                    'input' => [
                        '01 - test file.txt' => file_get_contents(__DIR__ . '/Example/input/01 - test file.txt'),
                        '02 - test file 2.txt' => file_get_contents(__DIR__ . '/Example/input/02 - test file 2.txt')
                    ],
                    'output' => [
                        '01 - test file.txt' => file_get_contents(__DIR__ . '/Example/output/01 - test file.txt'),
                        '02 - test file 2.txt' => file_get_contents(__DIR__ . '/Example/output/02 - test file 2.txt')
                    ],
                    'config.json' => file_get_contents(__DIR__ . '/Example/config.json'),
                    'CGCode.dist' => file_get_contents(__DIR__ . '/Example/CGCode.dist')
                ]
            ]
        ];
    }


    /**
     * Tests that the code will not be generated
     * if it already exist.
     */
    public function testWillNotEraseExistingCodeFile(): void
    {
        $fileStructure = $this->getFileStructure();
        $fileStructure['src'] = [
            'Example' => [
                'CGCode.php' => 'modified-code'
            ],
            'Example2' => [
                'CGCode.php' => 'modified-code2'
            ]
        ];
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(vfsStream::url('root/src/Example/CGCode.php'));
        self::assertStringEqualsFile(
            vfsStream::url('root/src/Example/CGCode.php'),
            'modified-code'
        );

        self::assertFileExists(vfsStream::url('root/src/Example2/CGCode.php'));
        self::assertStringEqualsFile(
            vfsStream::url('root/src/Example2/CGCode.php'),
            'modified-code2'
        );
    }

    /**
     * Tests that the code can be generated.
     */
    public function testCanGenerateTheCode(): void
    {
        $fileStructure = $this->getFileStructure();
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(
            vfsStream::url('root/src/Example/CGCode.php'),
            'The code file for Example has not been generated.'
        );

        self::assertFileExists(
            vfsStream::url('root/src/Example2/CGCode.php'),
            'The code file for Example2 has not been generated.'
        );
    }


    /**
     * Tests that the test will not be generated
     * if it already exist.
     */
    public function testWillNotEraseExistingTestFile(): void
    {
        $fileStructure = $this->getFileStructure();
        $fileStructure['tests'] = [
            'Example' => [
                'CGTest.php' => 'modified-test'
            ],
            'Example2' => [
                'CGTest.php' => 'modified-test2'
            ]
        ];
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(vfsStream::url('root/tests/Example/CGTest.php'));
        self::assertStringEqualsFile(
            vfsStream::url('root/tests/Example/CGTest.php'),
            'modified-test'
        );

        self::assertFileExists(vfsStream::url('root/tests/Example2/CGTest.php'));
        self::assertStringEqualsFile(
            vfsStream::url('root/tests/Example2/CGTest.php'),
            'modified-test2'
        );
    }

    /**
     * Tests that the test can be generated.
     */
    public function testCanGenerateTheTest(): void
    {
        $fileStructure = $this->getFileStructure();
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example/CGTest.php'),
            'The test file for Example has not been generated.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example2/CGTest.php'),
            'The test file for Example2 has not been generated.'
        );
    }


    /**
     * Tests that the input files will not be copied
     * if it already exist.
     */
    public function testWillNotEraseExistingInputFiles(): void
    {
        $fileStructure = $this->getFileStructure();
        $fileStructure['tests'] = [
            'Example' => [
                'input' => [
                    '01 - test file.txt' => 'modified-input1',
                ]
            ]
        ];
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(vfsStream::url('root/tests/Example/input/01 - test file.txt'));
        self::assertStringEqualsFile(
            vfsStream::url('root/tests/Example/input/01 - test file.txt'),
            'modified-input1'
        );
    }

    /**
     * Tests that the input files can be copied.
     */
    public function testCanCopyTheInputFiles(): void
    {
        $fileStructure = $this->getFileStructure();
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example/input/01 - test file.txt'),
            'The input file "01 - test file.txt" for Example has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example/input/02 - test file 2.txt'),
            'The input file "02 - test file 2.txt" for Example has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example2/input/01 - test file.txt'),
            'The input file "01 - test file.txt" for Example2 has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example2/input/02 - test file 2.txt'),
            'The input file "02 - test file 2.txt" for Example2 has not been copied.'
        );
    }

    /**
     * Tests that the output files will not be copied
     * if it already exist.
     */
    public function testWillNotEraseExistingOutputFiles(): void
    {
        $fileStructure = $this->getFileStructure();
        $fileStructure['tests'] = [
            'Example2' => [
                'output' => [
                    '02 - test file 2.txt' => 'modified-output2'
                ]
            ]
        ];
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(vfsStream::url('root/tests/Example2/output/02 - test file 2.txt'));
        self::assertStringEqualsFile(
            vfsStream::url('root/tests/Example2/output/02 - test file 2.txt'),
            'modified-output2'
        );
    }

    /**
     * Tests that the output files can be copied.
     */
    public function testCanCopyTheOutputFiles(): void
    {
        $fileStructure = $this->getFileStructure();
        vfsStream::setup(structure: $fileStructure);

        $filesGenerator = new FilesGenerator(__DIR__ . '/../../templates/');
        $filesGenerator->generate(
            vfsStream::url('root/config/'),
            vfsStream::url('root/src/'),
            vfsStream::url('root/tests/')
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example/output/01 - test file.txt'),
            'The output file "01 - test file.txt" for Example has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example/output/02 - test file 2.txt'),
            'The output file "02 - test file 2.txt" for Example has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example2/output/01 - test file.txt'),
            'The output file "01 - test file.txt" for Example2 has not been copied.'
        );

        self::assertFileExists(
            vfsStream::url('root/tests/Example2/output/02 - test file 2.txt'),
            'The output file "02 - test file 2.txt" for Example2 has not been copied.'
        );
    }
}
