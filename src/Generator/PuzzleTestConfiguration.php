<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * A puzzle's test configuration.
 */
final class PuzzleTestConfiguration
{
    // Properties :

    /**
     * @var string the name.
     */
    private string $name;

    /**
     * @var string the group.
     */
    private string $group;

    /**
     * @var string the method.
     */
    private string $method;

    /**
     * @var string the file.
     */
    private string $file;


    // Magic methods :

    /**
     * The constructor.
     * @param string $name the name.
     * @param string $group the group.
     * @param string $method the method.
     * @param string $file the file.
     */
    public function __construct(
        string $name,
        string $group,
        string $method,
        string $file
    ) {
        $this->name = $name;
        $this->group = $group;
        $this->method = $method;
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
     * Returns the group.
     * @return string the group.
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * Returns the method.
     * @return string the method.
     */
    public function getMethod(): string
    {
        return $this->method;
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
