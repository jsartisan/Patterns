<?php namespace Pattern\Pizzas;

class VeggiePizza extends Pizza {

  protected $type;

  function __construct($type)
  {
    $this->type = $type;
  }
}