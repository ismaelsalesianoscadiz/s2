<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    var $alumnos =array(
            array ("matricula"=>1,"nombre"=>"Pepe perez"),
            array ("matricula"=>2,"nombre"=>"Martin Martinez")
                  );
    public function indexAction($name)
    {
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
    }
    public function alumnosAction()
    {
        
        return $this->render('AcmeHelloBundle:Default:alumnos.html.twig', array("alumnos" => $this->alumnos));
    }
}
