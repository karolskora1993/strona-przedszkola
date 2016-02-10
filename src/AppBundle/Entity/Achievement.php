<?php
// src/AppBundle/Entity/Achievement.php

namespace AppBundle\Entity;

use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @Vich\Uploadable
*/
class Achievement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Year", inversedBy="achievements")
     * @ORM\JoinColumn(name="year_id", referencedColumnName="id")
     */
    protected $year;

/**
* @ORM\Column(type="string", length=255)
* @var string
*/
private $image;

/**
* @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
* @var File
*/
private $imageFile;



public function setImageFile(File $image = null)
{
$this->imageFile = $image;


if ($image) {
$this->updatedAt = new \DateTime('now');
}
}

public function getImageFile()
{
return $this->imageFile;
}

public function setImage($image)
{
$this->image = $image;
}

public function getImage()
{
return $this->image;
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

}