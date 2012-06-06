<?php
namespace Striide\TwitterbootstrapBundle\Factory;

use Striide\TwitterbootstrapBundle\Model\Navigation;

class NavigationFactory
{
  public static function getNavigationFromArray($array)
  {
    if(!is_array($array))
    {
      return null;
    }
    $navigation = new Navigation();

    foreach($array as $item)
    {
      $link = LinkFactory::getLinkFromArray($item);
      if(!is_null($link))
      {
        $navigation->addLink($link);
      }
    }
    return $navigation;
  }
}
