<?php namespace Pattern\Contracts;

interface Observer{

  // update value of the current observer
  public function update($temp, $humidity, $pressure);

}