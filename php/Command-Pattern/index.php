<?php

use Pattern\Commands\LightOffCommand;
use Pattern\Commands\TvOnCommand;
use Pattern\Receivers\Light;
use Pattern\Receivers\Tv;
use Pattern\RemoteControl;

require_once __DIR__ . '/vendor/autoload.php';


/*
 * this is our client file.
 * Client stores the commad in a invoker and later fires it when required.
 */

// creating the invoker. ( which executes and store the command ).
$remote = new RemoteControl;

// creating the receiver on which execute method is fired.
$light = new Light;
$tv = new Tv;

// creating the command, passing the receiver
$lightOffCommand = new LightoffCommand($light);
$tvOnCommand = new TvOnCommand($tv);

// storing the commend on invoker and firing it.
$remote->setCommand($lightOffCommand);
$remote->buttonWasPressed();
$remote->setCommand($tvOnCommand);
$remote->buttonWasPressed();;

