<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
  use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var seller
     *
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="Product")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id", nullable=false)
     */
    
    private $seller_id;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $unit_instock;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $unit_inorder;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $quent_perunit;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $unit_price;
    
    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $descr;
     /**
     * @var category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="Product")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $id_cat;
 



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
    function getId_sel() {
        return $this->seller_id;
    }

    function getUnit_instock() {
        return $this->unit_instock;
    }

    function getUnit_inorder() {
        return $this->unit_inorder;
    }

    function getQuent_perunit() {
        return $this->quent_perunit;
    }

    function getUnit_price() {
        return $this->unit_price;
    }

    function getDescr() {
        return $this->descr;
    }

    function getId_cat() {
        return $this->id_cat;
    }

    function getPicture() {
        return $this->picture;
    }

    function setId_sel($id_sel) {
        $this->seller_id = $id_sel;
    }

    function setUnit_instock($unit_instock) {
        $this->unit_instock = $unit_instock;
    }

    function setUnit_inorder($unit_inorder) {
        $this->unit_inorder = $unit_inorder;
    }

    function setQuent_perunit($quent_perunit) {
        $this->quent_perunit = $quent_perunit;
    }

    function setUnit_price($unit_price) {
        $this->unit_price = $unit_price;
    }

    function setDescr($descr) {
        $this->descr = $descr;
    }

    function setId_cat($id_cat) {
        $this->id_cat = $id_cat;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }


}
