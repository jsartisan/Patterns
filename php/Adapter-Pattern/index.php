<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\BookInterface;
use Pattern\Kindle;
use Pattern\KindleAdapter;

class Person{

  function read(BookInterface $book)
  {
    $book->open();
    $book->turnPage();
  }
}

(new Person)->read(new KindleAdapter(new Kindle));