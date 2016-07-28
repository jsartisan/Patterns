<?php

require_once __DIR__ . '/vendor/autoload.php';

$simpleCollection = new \Pattern\Collection(['a', 'b', 'c']);

foreach($simpleCollection as $item)
{
  var_dump($item);
}

$range = new \Pattern\Range(10, 99);

foreach($range as $item)
{
  var_dump($item);
}