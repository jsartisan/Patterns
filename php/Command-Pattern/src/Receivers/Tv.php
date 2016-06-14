<?php namespace Pattern\Receivers;


class Tv{

  /**
   * Turn on the light
   */
  public function on()
  {
    echo 'The tv is on now.' . PHP_EOL;
  }

  /**
   * Turn off the light
   */
  public function off()
  {
    echo 'The tv is off now.' . PHP_EOL;
  }
}