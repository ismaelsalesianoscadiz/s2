<?php

namespace DAM\MiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DAMMiBundle:Default:index.html.twig', array('name' => $name));
    }
	public function articulosAction()
{
    //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
    $articulos = array(
        array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
        array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
        array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
    );
    return $this->render('MiBundle:Default:articulos.html.twig', array('articulos' => $articulos));
}
public function repasoAction()
{

return $this->render('MDWDemoBundle:Default:repaso.html.twig');

}
	
}
