<?php

namespace App\Entity;

use App\Repository\RecipePostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipePostRepository::class)
 */
class RecipePost
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ingredients;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guidelines;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $preparationtime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $servings;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $recipeprice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getGuidelines(): ?string
    {
        return $this->guidelines;
    }

    public function setGuidelines(string $guidelines): self
    {
        $this->guidelines = $guidelines;

        return $this;
    }

    public function getPreparationtime(): ?string
    {
        return $this->preparationtime;
    }

    public function setPreparationtime(?string $preparationtime): self
    {
        $this->preparationtime = $preparationtime;

        return $this;
    }

    public function getServings(): ?string
    {
        return $this->servings;
    }

    public function setServings(?string $servings): self
    {
        $this->servings = $servings;

        return $this;
    }

    public function getRecipeprice(): ?string
    {
        return $this->recipeprice;
    }

    public function setRecipeprice(?string $recipeprice): self
    {
        $this->recipeprice = $recipeprice;

        return $this;
    }
}
