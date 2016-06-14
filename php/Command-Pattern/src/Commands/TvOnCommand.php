<?php namespace Pattern\Commands;

use Pattern\Receivers\Tv;

class TvOnCommand implements Command{


  /**
   * Tv is our receiver on which execute method is fired
   *
   * @param Tv tv
   */
  function __construct(Tv $tv)
  {
    $this->tv = $tv;
  }

  /**
   *
   */
  public function execute()
  {
    $this->tv->on();
  }

}