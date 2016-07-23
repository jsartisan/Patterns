<?php namespace Pattern;

class Kindle implements EbookReaderInterface{

  function turnOn()
  {
    var_dump('Turning on kindle');
  }

  function pressNextButton()
  {
    var_dump('Pressed the next page button on kindle');
  }

}