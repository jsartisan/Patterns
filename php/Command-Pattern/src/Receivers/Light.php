<?php namespace Pattern\Receivers;


class Light {

  /**
   * turn on the light
   */
  public function on()
  {
    echo 'The light is on now.' . PHP_EOL;
  }

  /**
   * turn off the light
   */
  public function off()
  {
    echo 'The light is off now.' . PHP_EOL;
  }
}