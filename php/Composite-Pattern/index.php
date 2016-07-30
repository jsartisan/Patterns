<?php

require_once __DIR__ . '/vendor/autoload.php';

// Client code
use Pattern\Div;
use Pattern\H1;
use Pattern\P;

$div = new Div;
$div->addChild(new H1('Title'));
$div->addChild(new P('Lorem ipsum...'));
$sub = new Div();
$sub->addChild(new P('Dolor sit amet...'));
$div->addChild($sub);
echo $div, "\n";