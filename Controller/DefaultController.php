<?php
namespace Striide\TwitterbootstrapBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction($name) 
  {
    return $this->render('StriideTwitterbootstrapBundle:Default:index.html.twig', array(
      'name' => $name
    ));
  }
}
