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

    /**
     * @var User
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="avatar")
     */
    private $user;

    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="App\Entity\Post", inversedBy="medias")
     * @ORM\JoinColumn(nullable=true)
     */
    private $post;

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

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Media
     */
    public function setUser(User $user): Media
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     * @return Media
     */
    public function setPost(Post $post): Media
    {
        $this->post = $post;

        return $this;
    }
}
