<?php namespace Pattern;

class Coffee extends CaffeineBeverage{
  /**
   * @return mixed
   */
  function brew()
  {
    var_dump('Dripping coffee through filter');
  }

  /**
   * @return mixed
   */
  function addCondiments()
  {
    var_dump('Addng sugar and milk');
  }

  /**
   * overriding the hook
   *
   *
   * @return bool
   */
  public function isCondimentNeeded()
  {
    return false;
  }


}