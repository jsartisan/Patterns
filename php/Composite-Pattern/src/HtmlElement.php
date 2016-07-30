<?php namespace Pattern;

/**
 * Component interface.
 * The Client depends only on this abstraction, whatever graph is built using
 * the specializations.
 */
interface HtmlElement {

  public function __toString();

}