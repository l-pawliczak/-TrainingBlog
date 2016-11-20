<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category extends AbstractTaxonomy{

    /**
     * @ORM\OneToMany(
     *     targetEntity = "Post",
     *     mappedBy = "category"
     * )
     */
    protected $posts;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add posts
     *
     * @param \BlogBundle\Entity\Post $posts
     * @return Category
     */
    public function addPost(\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \BlogBundle\Entity\Post $posts
     */
    public function removePost(\BlogBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
