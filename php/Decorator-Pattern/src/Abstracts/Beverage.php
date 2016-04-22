<?php namespace Pattern\Abstracts;

abstract class Beverage{

  public $description = "Default Beverage Description";

  public abstract function cost();

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }


}
