<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }


    /**
     * @Template()
     */
    public function postAction()
    {
        return array();
    }


    /**
     * @Template()
     */
    public function categoryAction()
    {
        return array();
    }

    
    /**
     * @Template()
     */
    public function tagAction()
    {
        return array();
    }

}
