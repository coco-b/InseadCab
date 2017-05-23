<?php

namespace CabBundle\Entity;

/**
 * Community
 */
class Community
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
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
     * @var \CabBundle\Entity\People
     */
    private $people;


    /**
     * Set people
     *
     * @param \CabBundle\Entity\People $people
     *
     * @return Community
     */
    public function setPeople(\CabBundle\Entity\People $people = null)
    {
        $this->people = $people;

        return $this;
    }

    /**
     * Get people
     *
     * @return \CabBundle\Entity\People
     */
    public function getPeople()
    {
        return $this->people;
    }
}
