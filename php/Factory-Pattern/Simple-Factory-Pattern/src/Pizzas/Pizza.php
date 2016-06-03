<?php namespace Pattern\Pizzas;

abstract class Pizza{

  public function making()
  {
    echo "Making the all new and awesome " . $this->type . ' Pizza' . "\n";

    return true;
  }
}