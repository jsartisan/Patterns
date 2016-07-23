<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Facades\HomeTheatreFacade;

$dvdPlayer = new \Pattern\Components\DvdPlayer();
$tv = new \Pattern\Components\Tv();
$light = new \Pattern\Components\Light();


$homeTheatre = new HomeTheatreFacade($dvdPlayer, $light, $tv);

$homeTheatre->watchMovie();

$homeTheatre->endMovie();