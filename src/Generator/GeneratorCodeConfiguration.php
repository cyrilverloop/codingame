<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The generator code configuration.
 */
final class GeneratorCodeConfiguration
{
    // Properties :

    /**
     * @var string the namespace.
     */
    private string $namespace;

    /**
     * @var string the name.
     */
    private string $name;

    /**
     * @var string the link.
     */
    private string $link;

    /**
     * @var string the default code.
     */
    private string $defaultCode;


    // Magic methods :

    /**
     * The constructor.
     * @param string $namespace the namespace.
     * @param string $name the name.
     * @param string $link the link.
     * @param string $defaultCode the default code.
     */
    public function __construct(
        string $namespace,
        string $name,
        string $link,
        string $defaultCode
    ) {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->link = $link;
        $this->defaultCode = $defaultCode;
    }


    // Accessors :

    /**
     * Returns the namespace.
     * @return string the namespace.
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * Returns the name.
     * @return string the name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the link.
     * @return string the link.
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Returns the default code.
     * @return string the default code.
     */
    public function getDefaultCode(): string
    {
        return $this->defaultCode;
    }
}
