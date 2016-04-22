<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\PizzaStore;
use Pattern\SimplePizzaFactory;

$factory = new SimplePizzaFactory;

$pizzaStore = new PizzaStore($factory);

// lets order cheese pizza
$pizzaStore->orderPizza('cheese');

// now lets order veggie pizza
$pizzaStore->orderPizza('veggie');