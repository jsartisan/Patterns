<?php namespace Pattern;

class Tea extends CaffeineBeverage{
  /**
   * @return mixed
   */
  function brew()
  {
    var_dump('Steeping the tea');
  }

  /**
   * @return mixed
   */
  function addCondiments()
  {
    var_dump('Adding lemon');
  }

}