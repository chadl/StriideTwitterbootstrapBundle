<?php
namespace Striide\TwitterbootstrapBundle\Model;

class Link
{
  private $css_class = null;
  private $url = null;
  private $label = null;
  private $attributes = null;

  public function __construct()
  {
    $this->css_class = '';
    $this->url = '#';
    $this->label = '___';
  }

  public function getCssClass()
  {
    return $this->css_class;
  }
  public function setCssClass($class)
  {
    $this->css_class = $class;
  }

  public function getUrl()
  {
    return $this->url;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getLabel()
  {
    return $this->label;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
}
