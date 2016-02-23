<?php namespace Pattern\Abstracts;

// In object-oriented programming, the decorator pattern (also known as Wrapper,
// an alternative naming shared with the Adapter pattern) is a design pattern
// that allows behavior to be added to an individual object, either statically or dynamically,
// without affecting the behavior of other objects from the same class.
// The decorator pattern is often useful for adhering to the Single Responsibility Principle,
// as it allows functionality to be divided between classes with unique areas of concern

// abstract base class
// this class acts as our abstract component class

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
