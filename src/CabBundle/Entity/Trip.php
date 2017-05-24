<?php

namespace CabBundle\Entity;

/**
 * Trip
 */
class Trip
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
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $spots;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var \CabBundle\Entity\Community
     */
    private $community;


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
     * @return Trip
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
     * Set departure
     *
     * @param string $departure
     *
     * @return Trip
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Trip
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Trip
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set spots
     *
     * @param integer $spots
     *
     * @return Trip
     */
    public function setSpots($spots)
    {
        $this->spots = $spots;

        return $this;
    }

    /**
     * Get spots
     *
     * @return integer
     */
    public function getSpots()
    {
        return $this->spots;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Trip
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set community
     *
     * @param \CabBundle\Entity\Community $community
     *
     * @return Trip
     */
    public function setCommunity(\CabBundle\Entity\Community $community = null)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return \CabBundle\Entity\Community
     */
    public function getCommunity()
    {
        return $this->community;
    }
}
