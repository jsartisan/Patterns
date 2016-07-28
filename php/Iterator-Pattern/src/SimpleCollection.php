<?php namespace Pattern;

use Traversable;

class SimpleCollection implements \IteratorAggregate{

  /**
   * @var
   */
  protected $items;

  /**
   * @param $items
   */
  function __construct($items)
  {
    $this->items = $items;
  }


  /**
   * (PHP 5 &gt;= 5.0.0)<br/>
   * Retrieve an external iterator
   * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
   * @return Traversable An instance of an object implementing <b>Iterator</b> or
   * <b>Traversable</b>
   */
  public function getIterator()
  {
    return new \ArrayIterator($this->items);
  }

}