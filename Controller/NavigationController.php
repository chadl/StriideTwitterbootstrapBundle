<?php
namespace Striide\TwitterbootstrapBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Striide\TwitterbootstrapBundle\Model\Navigation;
use Striide\TwitterbootstrapBundle\Factory\NavigationFactory;

class NavigationController extends Controller
{
  public function pagerAction($page,$filter =  null)
  {
    return $this->render('StriideTwitterbootstrapBundle:Navigation:pager.html.twig', array(
      'show_previous' => $page != 1,
      'show_next' => true,
      'next_page' => $page + 1,
      'previous_page' => $page - 1,
      'filter' => $filter
    ));
  }

  public function breadcrumbAction($crumbs = null)
  {
    if(is_null($crumbs))
    {
      return new Response('');
    }

    if(is_array($crumbs))
    {
      $crumbs = NavigationFactory::getNavigationFromArray($crumbs);
    }
    if(! $crumbs instanceof Navigation)
    {
      return new Response('');
    }
    return $this->render('StriideTwitterbootstrapBundle:Navigation:breadcrumb.html.twig',
                        array(
                          'crumbs' => $crumbs
                        )
    );
  }
}
