<?php namespace Pattern\Observers;

use Pattern\Contracts\DisplayElement;
use Pattern\Contracts\Observer;
use Pattern\Contracts\Subject;

class CurrentConditionDisplay implements Observer, DisplayElement{

  private  $temperature;
  private $humidity;
  private $weatherData;

  function __construct(Subject $weatherData)
  {
    $this->weatherData = $weatherData;

    $this->weatherData->registerObserver($this);
  }

  public function update($temperature, $humidity, $pressure)
  {
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->display();
  }

  public function display()
  {
    echo "Current Conditions : " . $this->temperature . ' F degress and ' . $this->humidity . ' % humidity' . "\n";
  }

}