<?php

namespace CabBundle\Entity;

/**
 * People
 */
class People
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $comfirmpassword;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $communities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->communities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return People
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return People
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return People
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return People
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set comfirmpassword
     *
     * @param string $comfirmpassword
     *
     * @return People
     */
    public function setComfirmpassword($comfirmpassword)
    {
        $this->comfirmpassword = $comfirmpassword;

        return $this;
    }

    /**
     * Get comfirmpassword
     *
     * @return string
     */
    public function getComfirmpassword()
    {
        return $this->comfirmpassword;
    }

    /**
     * Add community
     *
     * @param \CabBundle\Entity\Community $community
     *
     * @return People
     */
    public function addCommunity(\CabBundle\Entity\Community $community)
    {
        $this->communities[] = $community;

        return $this;
    }

    /**
     * Remove community
     *
     * @param \CabBundle\Entity\Community $community
     */
    public function removeCommunity(\CabBundle\Entity\Community $community)
    {
        $this->communities->removeElement($community);
    }

    /**
     * Get communities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommunities()
    {
        return $this->communities;
    }
}
