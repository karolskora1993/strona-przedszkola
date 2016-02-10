<?php
// src/AppBundle/Entity/Year.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="school_year")
 */
class Year
{
    /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $year;

    /**
     * @ORM\OneToMany(targetEntity="Achievement", mappedBy="year")
     */
    protected $achievements;

    public function __construct()
    {
        $this->achievements = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getAchievements()
    {
        return $this->achievements;
    }

    /**
     * @param mixed $achievements
     */
    public function setAchievements($achievements)
    {
        $this->achievements = $achievements;
    }

}


