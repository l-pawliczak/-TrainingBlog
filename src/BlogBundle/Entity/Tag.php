<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="tags")
 */
class Tag extends AbstractTaxonomy{


    /**
     * @ORM\ManyToMany(
     *     targetEntity = "Post",
     *     mappedBy = "tags"
     *)
     *
     */
    protected $posts;
    
    
}