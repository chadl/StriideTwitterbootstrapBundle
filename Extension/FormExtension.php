<?php
namespace Striide\TwitterbootstrapBundle\Extension;
use Symfony\Component\HttpKernel\Kernel;

class FormExtension extends \Twig_Extension
{
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
    $value = $formFieldObject->get('value');
    
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
    $attr = $formFieldObject->get('attr');
    
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
    $attr = $formFieldObject->get('attr');
    
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
    $attr = $formFieldObject->get('attr');
    return $attr['tip'];
  }
  /**
   * gets the field label
   */
  public function getFieldLabel($formFieldObject) 
  {
    $label = $formFieldObject->get('label');
    return $label;
  }
  public function notempty($value) 
  {
    
    if (!empty($value)) 
    {
      return true;
    }
    return false;
  }
  public function formValue($formFieldObject) 
  {
    return $formFieldObject->get('value');
  }
  public function getName() 
  {
    return 'striide_Twitterbootstrap_form_twig_extension';
  }
}
