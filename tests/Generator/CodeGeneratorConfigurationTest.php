<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Generator;

use CyrilVerloop\Codingame\Generator\CodeGeneratorConfiguration;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the generator code configuration.
 */
#[
    PA\CoversClass(CodeGeneratorConfiguration::class),
    PA\Group('cgpt'),
    PA\Group('cgpt_generator'),
    PA\Group('cgpt_generator_codeGeneratorConfiguration')
]
final class CodeGeneratorConfigurationTest extends TestCase
{
    // Methods :

    /**
     * Tests it has a namespace.
     */
    public function testHasANamespace(): void
    {
        $generatorCodeConfiguration = new CodeGeneratorConfiguration(
            'a-namespace',
            'a-name',
            'a-link',
            'default-code'
        );

        self::assertSame('a-namespace', $generatorCodeConfiguration->getNamespace());
    }

    /**
     * Tests it has a name.
     */
    public function testHasAName(): void
    {
        $generatorCodeConfiguration = new CodeGeneratorConfiguration(
            'a-namespace',
            'a-name',
            'a-link',
            'default-code'
        );

        self::assertSame('a-name', $generatorCodeConfiguration->getName());
    }

    /**
     * Tests it has a link.
     */
    public function testHasALink(): void
    {
        $generatorCodeConfiguration = new CodeGeneratorConfiguration(
            'a-namespace',
            'a-name',
            'a-link',
            'default-code'
        );

        self::assertSame('a-link', $generatorCodeConfiguration->getLink());
    }

    /**
     * Tests it has a default code.
     */
    public function testHasADefaultCode(): void
    {
        $generatorCodeConfiguration = new CodeGeneratorConfiguration(
            'a-namespace',
            'a-name',
            'a-link',
            'default-code'
        );

        self::assertSame('default-code', $generatorCodeConfiguration->getDefaultCode());
    }
}
