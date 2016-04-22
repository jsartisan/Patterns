<?php namespace Pattern;

use Pattern\Pizzas\CheesePizza;
use Pattern\Pizzas\VeggiePizza;

class SimplePizzaFactory{

  /**
   * creates pizza instance
   *
   * @param $type
   * @return null|CheesePizza|VeggiePizza
   */
  public function createPizza($type)
  {
    $pizza = null;

    if($type == 'cheese')
    {
      $pizza = new CheesePizza($type);
    }
    else if($type = 'veggie')
    {
      $pizza = new VeggiePizza($type);
    }

    return $pizza;
  }
}