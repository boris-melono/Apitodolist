<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TaskRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
#[ApiResource]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $description_task;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'relation')]
    private $user_task;

    #[ORM\OneToMany(mappedBy: 'task', targetEntity: User::class)]
    private $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionTask(): ?string
    {
        return $this->description_task;
    }

    public function setDescriptionTask(string $description_task): self
    {
        $this->description_task = $description_task;

        return $this;
    }

    public function getUserTask(): ?User
    {
        return $this->user_task;
    }

    public function setUserTask(?User $user_task): self
    {
        $this->user_task = $user_task;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(User $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
            $relation->setTask($this);
        }

        return $this;
    }

    public function removeRelation(User $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getTask() === $this) {
                $relation->setTask(null);
            }
        }

        return $this;
    }
}
