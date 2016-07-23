<?php namespace Pattern\Facades;

use Pattern\Components\DvdPlayer;
use Pattern\Components\Light;
use Pattern\Components\Tv;

class HomeTheatreFacade{


  function __construct(
    DvdPlayer $dvdPlayer,
    Light $light,
    Tv $tv
  )
  {
    $this->dvdPlayer = $dvdPlayer;
    $this->light = $light;
    $this->tv = $tv;
  }

  public function watchMovie()
  {
    $this->dvdPlayer->putDvd();
    $this->light->dim(10);
    $this->tv->turnOn();
  }

  public function endMovie()
  {
    $this->light->dim(0);
    $this->tv->turnOff();
    $this->dvdPlayer->removeDvd();
  }
}