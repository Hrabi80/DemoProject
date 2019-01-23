<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
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
    private $addr;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $sex;
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $age;
    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $active;
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

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

    function getAddr() {
        return $this->addr;
    }

    function getSex() {
        return $this->sex;
    }

    function getAge() {
        return $this->age;
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

    function setAddr($addr) {
        $this->addr = $addr;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    function setAge($age) {
        $this->age = $age;
    }

      /**
     * @return bool
     */
    public function isActive() : ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }


}
