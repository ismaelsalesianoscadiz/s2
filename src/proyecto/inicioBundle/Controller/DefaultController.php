<?php

namespace proyecto\inicioBundle\Controller;

use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use proyecto\inicioBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;



//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{



    public function indexAction($name)
    {
        return $this->render('proyectoinicioBundle:Default:index.html.twig', array('name' => $name));
    }
	public function repasoAction()
    {
        return $this->render('proyectoinicioBundle:Default:repaso.html.twig');
    }
	public function repaso2Action()
    {
        return $this->render('proyectoinicioBundle:Default:repaso2.html.twig');
    }
	public function html5Action()
    {
        return $this->render('proyectoinicioBundle:Mispaginas:index.html.twig');
    }
	public function ejemploAction(Request $request)
    {
	// crea una task y le asigna algunos datos ficticios para este ejemplo

        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->getForm();
			
			 return $this->render('proyectoinicioBundle:Mispaginas:examples.html.twig', array(
            'form' => $form->createView()));

     
	/*
          return $this->render('proyectoinicioBundle:Mispaginas:examples.html.twig');
		  */
    }
	/*
	public function ejemploAction()
    {
	// crea una task y le asigna algunos datos ficticios para este ejemplo

        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->getForm();
			
			 return $this->render('proyectoinicioBundle:Mispaginas:examples.html.twig', array(
            'form' => $form->createView()));

     */
	/*
          return $this->render('proyectoinicioBundle:Mispaginas:examples.html.twig');
		  �
		  */

public function recibirFromularioAction(Request $request)
{
    // crear un objeto $task nuevo (borra los datos de prueba)
    $task = new Task();
 
    $form = $this->createFormBuilder($task)
        ->add('task', 'text')
        ->add('dueDate', 'date')
        ->add('save', 'submit')
        ->getForm();
 
    $form->handleRequest($request);
 
    if ($form->isValid()) {
 
        // guardar la tarea en la base de datos
			
			
			 return $this->render('proyectoinicioBundle:Mispaginas:index.html.twig', array('task' => $task));
      //  return $this->redirect($this->generateUrl('task_success'));
    }
    
     return $this->render('proyectoinicioBundle:Default:repaso2.html.twig');
 
    // ...
}
		  
		  
		  /*
public function recibirFromularioAction(Request $request)
{
    // s�lo configura un objeto $task fresco (remueve los datos de prueba)
    $task = new Task();

    $form = $this->createFormBuilder($task)
        ->add('task', 'text')
        ->add('dueDate', 'date')
        ->getForm();
	$temporal = $this->get('request')->request->get('name');
	
    if ($request->isMethod('POST')) {
        $form->bind($request);

        if ($form->isValid()) {
            // realiza alguna acci�n, tal como guardar la tarea en la base de datos
			return $this->render('proyectoinicioBundle:Default:index.html.twig', array('name' => $temporal));
          //  return $this->redirect($this->generateUrl('proyectoinicio_homepage/',$task-));
        }
    }
	

    // ...
}
*/
}
?>