<?php namespace Pattern\Observers;

use Pattern\Contracts\DisplayElement;
use Pattern\Contracts\Observer;
use Pattern\Contracts\Subject;

class NewSuperAwesomeDisplay implements Observer, DisplayElement{

  private $temperature;
  private $humidity;
  private $pressure;
  private $weatherData;

  function __construct(Subject $weatherData)
  {
    $this->weatherData = $weatherData;

    $this->weatherData->registerObserver($this);
  }

  public function update($temperature, $humidity, $pressure)
  {
    $this->$temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;

    $this->display();
  }

  public function display()
  {
    echo "The new super awesome conditions are : " . $this->temperature . ' F degrees ! Awesome and '.  $this->humidity . ' % HUMIDIY !!! and ' .  $this->pressure . ' % pressure. Cool !' . "\n";;
  }


}