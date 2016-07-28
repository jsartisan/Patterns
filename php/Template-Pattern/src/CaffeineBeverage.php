<?php namespace Pattern;

abstract class CaffeineBeverage{

  /**
   *
   */
  public function prepareRecipe()
  {
    $this->boilWater();
    $this->brew();
    $this->pourInCup();

    // using hook
    if($this->isCondimentNeeded())
    {
      $this->addCondiments();
    }

  }

  /**
   *
   */
  public function boilWater()
  {
    var_dump('Boiling Water');
  }

  /**
   * primitive operation
   *
   * @return mixed
   */
  abstract function brew();

  /**
   * concrete operation
   */
  public function pourInCup()
  {
    var_dump('Pouring the beverage in the cup');
  }

  /**
   *
   * @return mixed
   */
  abstract function addCondiments();

  /**
   * This is hook
   *
   * @return bool
   */
  public function isCondimentNeeded()
  {
    return true;
  }
}