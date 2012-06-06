<?php
namespace Striide\TwitterbootstrapBundle\Model;

class Navigation
{
  private $links;
  public function __construct()
  {
    $this->links = array();
  }

  public function addLink(Link $link)
  {
    $this->links[] = $link;
  }
  public function getLinks()
  {
    return $this->links;
  }
  public function getHasLinks()
  {
    if(!is_null($this->links) && count($this->links) > 0)
    {
      return true;
    }
    return false;
  }
}
