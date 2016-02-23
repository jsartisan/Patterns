<?php namespace Pattern\Condiments;

use Pattern\Abstracts\Beverage;
use Pattern\Abstracts\Condiment;

class Mocha extends Condiment{

  public $beverage;

  public $description = "Mocha";

  function __construct(Beverage $beverage)
  {
    $this->beverage = $beverage;

    $this->setDescription($this->description = $this->beverage->description . ' with ' . $this->description);
  }

  public function cost()
  {
    return 50 + $this->beverage->cost();
  }

}