<?php namespace Pattern;

class Book implements BookInterface
{
  function open()
  {
    var_dump('Opening Page');
  }

  function turnPage()
  {
    var_dump('Turning the page of paper book');
  }

}