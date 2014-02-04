<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
	
    {
       return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
	    
}
public function repasoAction()
{

return $this->render('MDWDemoBundle:Default:repaso.html.twig');

}
