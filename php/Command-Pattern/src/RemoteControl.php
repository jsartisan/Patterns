<?php namespace Pattern;

use Pattern\Commands\Command;

/**
 * RemoteControl is our invoker.
 * Invoker stores the command.
 * and then later fires it when required.
 *
 * Class RemoteControl
 * @package Pattern
 */
class RemoteControl{

  protected $slot;

  /**
   * Sets the slot of the remote control
   * @param Command $command
   */
  public function setCommand(Command $command)
  {
    $this->slot = $command;
  }

  /**
   * when button is pressed, the execute method is called on receiver. ( Light in our case ).
   */
  public function buttonWasPressed()
  {
    $this->slot->execute();
  }
}