<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\BurgerSingleton;


$burger1 = BurgerSingleton::instance();
$burger2 = BurgerSingleton::instance();


$burger1->displayPrice();
$burger2->displayPrice();