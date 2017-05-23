<?php

namespace CabBundle\Entity;

/**
 * Community
 */
class Community
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $peoples;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->peoples = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Community
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
     * Add people
     *
     * @param \CabBundle\Entity\People $people
     *
     * @return Community
     */
    public function addPeople(\CabBundle\Entity\People $people)
    {
        $this->peoples[] = $people;

        return $this;
    }

    /**
     * Remove people
     *
     * @param \CabBundle\Entity\People $people
     */
    public function removePeople(\CabBundle\Entity\People $people)
    {
        $this->peoples->removeElement($people);
    }

    /**
     * Get peoples
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeoples()
    {
        return $this->peoples;
    }
}
