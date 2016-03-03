<?php namespace Pattern\Subjects;

use Pattern\Contracts\Observer;
use Pattern\Contracts\Subject;

class WeatherData implements Subject{

  private $observers = [];
  private $temperature;
  private $humidity;
  private $pressure;

  // add new observer to the observers array
  public function registerObserver(Observer $observer)
  {
    $this->observers[] = $observer;
  }

  // remove a observer from the observer array
  public function removeObserver(Observer $observer)
  {
    if (($key = array_search($observer, $this->observers)) !== false) {
      unset($this->observers[$key]);
    }
  }

  // notify all observer about any change
  public function notifyObservers()
  {
    foreach($this->observers as $observer)
    {
      $observer->update($this->temperature, $this->humidity, $this->pressure);
    }
  }

  public function measurementChanged()
  {
    $this->notifyObservers();
  }

  public function setMeasurements($temperature, $humidity, $pressure)
  {
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;

    $this->measurementChanged();
  }
}