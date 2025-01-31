<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Configuration;

/**
 * A test configuration.
 */
final class TestConfiguration
{
    // Properties :

    /**
     * @var string the name.
     */
    private string $name;

    /**
     * @var string the alphanumeric name.
     */
    private string $alphanumName;

    /**
     * @var string the file.
     */
    private string $file;


    // Magic methods :

    /**
     * The constructor.
     * @param string $name the name.
     * @param string $alphanumName the alphanumeric name.
     * @param string $file the file.
     */
    public function __construct(
        string $name,
        string $alphanumName,
        string $file
    ) {
        $this->name = $name;
        $this->alphanumName = $alphanumName;
        $this->file = $file;
    }


    // Accessors :

    /**
     * Returns the name.
     * @return string the name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the alphanumeric name.
     * @return string the alphanumeric name.
     */
    public function getAlphanumName(): string
    {
        return $this->alphanumName;
    }

    /**
     * Returns the file.
     * @return string the file.
     */
    public function getFile(): string
    {
        return $this->file;
    }
}
