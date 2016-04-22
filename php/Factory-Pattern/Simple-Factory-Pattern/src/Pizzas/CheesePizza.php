<?php namespace Pattern\Pizzas;

class CheesePizza extends Pizza{

  protected $type;

  function __construct($type)
  {
    $this->type = $type;
  }
}