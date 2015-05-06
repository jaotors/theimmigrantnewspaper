<?php namespace Snp\Validation;

use Illuminate\Support\ServiceProvider;
 
class SnpValidationServiceProvider extends ServiceProvider {
 
  public function register(){}
 
  public function boot()
  {
    $this->app->validator->resolver(function($translator, $data, $rules, $messages)
    {
      return new SnpValidator($translator, $data, $rules, $messages);
    });
  }
 
}