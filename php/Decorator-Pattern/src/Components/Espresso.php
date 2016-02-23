<?php namespace Pattern\Components;

use Pattern\Abstracts\Beverage;

class Espresso extends Beverage{

  public $description = 'Ewwsome Espresso';

  public function cost()
  {
    return 150;
  }
}