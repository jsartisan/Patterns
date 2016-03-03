<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Components\DarkRoast;
use Pattern\Decorators\Mocha;
use Pattern\Components\Espresso;
use Pattern\Decorators\SteamedMilk;

// creating Dark Roast With Mocha
$dark_roast = new DarkRoast;
$dark_roast_with_mocha = new Mocha($dark_roast);

echo "Price of Dark Roast with Mocha : " . $dark_roast_with_mocha->cost() . "\n";
echo $dark_roast_with_mocha->getDescription() . "\n\n";

// creating Espresso with Mocha and Steamed Milk
$espresso = new Espresso;
$espresso_with_steamed_milk = new SteamedMilk($espresso);
$espresso_with_steamed_milk_with_mocha = new Mocha($espresso_with_steamed_milk);

echo "Price of Espresso with Steamed Milk and Mocha : " . $espresso_with_steamed_milk_with_mocha->cost() . "\n";
echo $espresso_with_steamed_milk_with_mocha->getDescription() . "\n\n";