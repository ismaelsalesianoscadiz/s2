<?php

namespace ac\HBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('acHBundle:Default:index.html.twig', array('name' => $name));
    }
}
