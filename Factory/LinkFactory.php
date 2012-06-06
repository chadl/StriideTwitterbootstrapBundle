<?php
namespace Striide\TwitterbootstrapBundle\Factory;

use Striide\TwitterbootstrapBundle\Model\Link;

class LinkFactory
{
  public static function getLinkFromArray($array)
  {
    if(!is_array($array))
    {
      return null;
    }
    $link = new Link();

    if(isset($array['href']))
    {
      $link->setUrl($array['href']);
    }
    if(isset($array['class']))
    {
      $link->setCssClass($array['class']);
    }
    if(isset($array['label']))
    {
      $link->setLabel($array['label']);
    }

    if(isset($array['attr']))
    {
      $link->setAttributes($array['attr']);
    }
    return $link;
  }
}
