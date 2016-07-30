<?php namespace Pattern;

/**
 * Leaf sample implementation.
 * Represents an <h1> element.
 */
class H1 implements HtmlElement
{
  private $_text;

  public function __construct($text)
  {
    $this->_text = $text;
  }

  public function __toString()
  {
    return "<h1>{$this->_text}</h1>";
  }
}