<?php namespace Pattern\Decorators;

use Pattern\Abstracts\Beverage;
use Pattern\Abstracts\Condiment;

class SteamedMilk extends Condiment
{
  public $beverage;

  public $description = "Steamed Milk";

  function __construct(Beverage $beverage)
  {
    $this->beverage = $beverage;

    $this->setDescription($this->description = $this->beverage->description . ' with ' . $this->description);
  }

  public function cost()
  {
    return 40 + $this->beverage->cost();
  }
}