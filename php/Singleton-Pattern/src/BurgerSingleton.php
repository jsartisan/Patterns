<?php namespace Pattern;

class BurgerSingleton{

  /**
   * @var
   */
  private static $instance;

  /**
   * creates an burger instance if not available
   *
   * @return __CLASS__ ( it means the current class ).
   */
  public static function instance()
  {
    if (!isset(self::$instance)) {
      $class = __CLASS__;
      self::$instance = new $class;
    }
    return self::$instance;
  }

  /**
   * @return int
   */
  public function getPrice()
  {
    return 20;
  }

  /**
   * @return int
   */
  public function displayPrice()
  {
    echo('Burger Price : ' . $this->getPrice() . PHP_EOL);
  }


}