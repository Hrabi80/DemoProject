<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\SellerRepository")
 */
class Seller
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
    private $username;
   /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $lname;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $tel;
     /**
     * @var string
     *
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $mail;
   /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $pass;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $numid;
     /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $city;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $postal;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $addr;
    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $desc;
     /**
     *
     * @ORM\Column(type="integer")
     */
    private $comm;
      /**
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $logo;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $groupid;
     /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $active;


    public function getId(): ?int
    {
        return $this->id;
    }
    function getUsername() {
        return $this->username;
    }

    function getName() {
        return $this->name;
    }

    function getLname() {
        return $this->lname;
    }

    function getTel() {
        return $this->tel;
    }

    function getMail() {
        return $this->mail;
    }

    function getPass() {
        return $this->pass;
    }

    function getNumid() {
        return $this->numid;
    }

    function getCity() {
        return $this->city;
    }

    function getPostal() {
        return $this->postal;
    }

    function getAddr() {
        return $this->addr;
    }

    function getDesc() {
        return $this->desc;
    }

    function getComm() {
        return $this->comm;
    }

    function getLogo() {
        return $this->logo;
    }

    function getGroupid() {
        return $this->groupid;
    }

    function getActive() {
        return $this->active;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLname($lname) {
        $this->lname = $lname;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setNumid($numid) {
        $this->numid = $numid;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setPostal($postal) {
        $this->postal = $postal;
    }

    function setAddr($addr) {
        $this->addr = $addr;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }

    function setComm($comm) {
        $this->comm = $comm;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setGroupid($groupid) {
        $this->groupid = $groupid;
    }

    function setActive($active) {
        $this->active = $active;
    }


}
