<?php namespace Snp\Validation;
 
class SnpValidator extends \Illuminate\Validation\Validator {
 
  public function validateHex($attribute, $value, $parameters)
  {
    if(preg_match("/^#?([a-f0-9]{6}|[a-f0-9]{3})$/", $value))
    {
      return true;
    }
   
    return false;
  }

  public function validateEqualone($attribute, $value, $parameters)
  {
    $str = URL::currentpath();
    if($value == 1)
    {
      return true;
    }
   
    return false;
  }
}