<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 */
class Media
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(type="integer", length=1)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $path;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Media
     */
    public function setType(int $type): Media
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return Media
     */
    public function setPath(string $path): Media
    {
        $this->path = $path;

        return $this;
    }
}
