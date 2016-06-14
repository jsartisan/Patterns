<?php namespace Pattern\Commands;

use Pattern\Receivers\Light;

class LightOffCommand implements Command{


  /**
   * Light is our receiver on which execute method is fired
   *
   * @param Light $light
   */
  function __construct(Light $light)
  {
    $this->light = $light;
  }

  /**
   *
   */
  public function execute()
  {
    $this->light->off();
  }

}