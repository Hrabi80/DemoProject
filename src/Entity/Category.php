<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var Product[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="Category")
     */
    private $prods;
     
    /**
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $picture;

    public function getId(): ?int
    {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }

    function getProds(): array {
        return $this->prods;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setProds(array $prods) {
        $this->prods = $prods;
    }
        /**
     * @param Product $prod
     *
     * @return self
     */
    public function addJob(Product $prod) : self
    {
        if (!$this->prods->contains($prod)) {
            $this->prods->add($prod);
        }

        return $this;
    }

    /**
     * @param Product $prod
     *
     * @return self
     */
    public function removeJob(Product $prod) : self
    {
        $this->prods->removeElement($prod);

        return $this;
    }


}
