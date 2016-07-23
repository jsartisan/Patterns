<?php namespace Pattern\Components;

class Light{

  function dim($value)
  {
    var_dump('dimming the light by' . $value . ' %');
  }
}