<?php namespace Pattern;


class KindleAdapter implements BookInterface{


  function __construct(Kindle $kindle)
  {
    $this->kindle = $kindle;
  }

  function open()
  {
    return $this->kindle->turnOn();
  }

  function turnPage()
  {
    return $this->kindle->pressNextButton();
  }

}