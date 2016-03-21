<?php
// src/AppBundle/Entity/Article.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $article;

    /**
     * @Vich\UploadableField(mapping="article_files", fileNameProperty="article")
     * @var File
     */
    private $articleFile;

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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $desciption
     */
    public function setDescription($description)
    {
        $this->desciption = $description;
    }

    /**
     * @return File
     */
    public function getArticleFile()
    {
        return $this->articleFile;
    }

    /**
     * @param File $articleFile
     */
    public function setArticleFile($articleFile)
    {
        $this->articleFile = $articleFile;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $file
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

}