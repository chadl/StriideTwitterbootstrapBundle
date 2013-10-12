<?php
namespace Striide\TwitterbootstrapBundle\Extension;
use Symfony\Component\HttpKernel\Kernel;

class FormExtension extends \Twig_Extension
{
  protected $logger;
  public function setLogger($l)
  {
    $this->logger = $l;
  }

  /**
   *
   */
  public function getFilters()
  {
    return array(
      'form_value' => new \Twig_Filter_Method($this, 'formValue') ,
      'field_label' => new \Twig_Filter_Method($this, 'getFieldLabel') ,
      'field_has_tip' => new \Twig_Filter_Method($this, 'hasFieldTip') ,
      'field_tip' => new \Twig_Filter_Method($this, 'getFieldTip') ,
      'is_inline' => new \Twig_Filter_Method($this, 'isInlineFieldOptions') ,
    );
  }

  /**
   *
   */
  public function getTests()
  {
    return array(
      'emptyformfield' => new \Twig_Test_Method($this, 'formFieldEmpty') ,
      'notempty' => new \Twig_Test_Method($this, 'notempty')
    );
  }

  /**
   * checks to see if the form field is empty
   */
  public function formFieldEmpty($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject));

    $value = $formFieldObject->vars['value'];

    if (empty($value))
    {
      return true;
    }
    return false;
  }

  /**
   * checks to see if the form field has a tip
   */
  public function hasFieldTip($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject));

    $attr = $formFieldObject->vars['attr'];

    if (isset($attr['tip']))
    {
      return true;
    }
    return false;
  }

  /**
   * checks to see if the form field is inline
   */
  public function isInlineFieldOptions($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject));
    $attr = $formFieldObject->vars['attr'];

    if (isset($attr['inline']))
    {
      return true;
    }
    return false;
  }

  /**
   * checks to see if the form field has a tip
   */
  public function getFieldTip($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject));
    $attr = $formFieldObject->vars['attr'];
    return $attr['tip'];
  }

  /**
   * gets the field label
   */
  public function getFieldLabel($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject->vars['label'],$formFieldObject->vars['value']));
    $label = $formFieldObject->vars['label'];
    return $label;
  }

  /**
   *
   */
  public function notempty($value)
  {
    if (!empty($value))
    {
      return true;
    }
    return false;
  }

  /**
   *
   */
  public function formValue($formFieldObject)
  {
    //$this->logger->info(__METHOD__,array($formFieldObject));
    return $formFieldObject->vars['value'];
  }

  /**
   *
   */
  public function getName()
  {
    return 'striide_Twitterbootstrap_form_twig_extension';
  }
}
