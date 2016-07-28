<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Coffee;
use Pattern\Tea;


(new Coffee)->prepareRecipe(); // remember we have override the hook in coffee
(new Tea)->prepareRecipe();