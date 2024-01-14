<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiFilter;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use App\Filter\MaxPriceFilter;
use App\Filter\MinPriceFilter;

#[ApiResource(
    operations: [
        new GetCollection(),
        new Post(validationContext: ['groups' => ['Default', 'user:create']]),
        new Get(),
        new Put(denormalizationContext: ['groups' => ['user:update']]),
        new Patch(denormalizationContext: ['groups' => ['user:patch']]),
        new Delete(security: 'is_granted("ROLE_ADMIN") and object == user)'),
    ],
)]
#[ApiFilter(SearchFilter::class, properties: ['categories' => 'exact', 'name' => 'partial', 'size' => 'exact'])]
#[ApiFilter(MinPriceFilter::class)]
#[ApiFilter(MaxPriceFilter::class)]
#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['user:read', 'user:create', 'user:update', 'user:patch'])]
    private $name;

    #[Assert\NotBlank]
    #[Groups(['user:read', 'user:create', 'user:update', 'user:patch'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[Groups(['user:read', 'user:create', 'user:update', 'user:patch'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[Assert\NotBlank]
    #[Groups(['user:read', 'user:create', 'user:update', 'user:patch'])]
    #[ORM\Column(type: 'integer')]
    private $price;

    #[Assert\NotBlank]
    #[Groups(['user:read', 'user:create', 'user:update', 'user:patch'])]
    private int $quantity=0;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'products')]
    private $categories;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank]
    #[Groups(['user:read', 'user:create', 'user:update'])]
    private $size;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getFullName(): ?string
    {
        return $this->name." - ".$this->price;
    }
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }



    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->categories->removeElement($category);

        
        return $this;
    }

    public function __toString(){
        return $this->name;
    }
}
