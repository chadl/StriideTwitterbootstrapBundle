<?php
namespace Striide\TwitterbootstrapBundle\Extension;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Bridge\Twig\Form\TwigRendererInterface;

class ModalExtension extends \Twig_Extension
{
  public $twig;

  public function __construct($t)
  {
    $this->twig = $t;
  }

  public function getFunctions()
  {
    return array(
      'striide_modal' => new \Twig_Function_Method($this, 'modal', array('is_safe' => array('html'))),
    );
  }

  public function modal($options)
  {
    $template = "StriideTwitterbootstrapBundle:Modal:modal.html.twig";
    $params = array();
    if(is_array($options))
    {
      if(isset($options['id']))
      {
        $params['id'] = $options['id'];
      }

      if(isset($options['template']))
      {
        $template = $options['template'];
      }
    }

    return $this->twig->render($template, $params);
  }

  public function getName()
  {
    return 'striide_Twitterbootstrap_modal_twig_extension';
  }
}
