<?php
namespace Striide\TwitterbootstrapBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
  public function pagerAction($page)
  {
    return $this->render('StriideTwitterbootstrapBundle:Navigation:pager.html.twig', array(
      'show_previous' => $page != 1,
      'show_next' => true,
      'next_page' => $page + 1,
      'previous_page' => $page - 1
    ));
  }
}
