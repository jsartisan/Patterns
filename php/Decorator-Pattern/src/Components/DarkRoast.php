<?php namespace Pattern\Components;

use Pattern\Abstracts\Beverage;

class DarkRoast extends Beverage{

  public $description = 'Darkest Roast Ever';

  public function cost()
  {
    return 100;
  }
}