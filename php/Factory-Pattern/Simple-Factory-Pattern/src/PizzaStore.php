<?php namespace Pattern;

class PizzaStore{

  protected $factory;

  /**
   * @param SimplePizzaFactory $factory
   */
  function __construct(SimplePizzaFactory $factory)
  {
    $this->factory = $factory;
  }

  /**
   * creates and makes an pizza
   *
   * @param $type
   * @return mixed
   */
  public function orderPizza($type)
  {
    $pizza = $this->factory->createPizza($type);

    return $pizza->making();
  }


}