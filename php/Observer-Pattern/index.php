<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Subjects\WeatherData;
use Pattern\Observers\NewSuperAwesomeDisplay;
use Pattern\Observers\CurrentConditionDisplay;

$weatherData = new WeatherData;
$currentDisplay = new CurrentConditionDisplay($weatherData);
$theNewAwesomeDisplay = new NewSuperAwesomeDisplay($weatherData);

$weatherData->setMeasurements(40, 20, 100);
$weatherData->setMeasurements(30, 10, 89);
$weatherData->setMeasurements(20, 50, 50);