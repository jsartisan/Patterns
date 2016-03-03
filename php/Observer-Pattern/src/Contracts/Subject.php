<?php namespace Pattern\Contracts;

interface Subject{

  // adds new observer
  public function registerObserver(Observer $observer);

  // removes a observer
  public function removeObserver(Observer $observer);

  // this method is called to notify all observers when the
  // Subject 's state has changed.
  public function notifyObservers();
}