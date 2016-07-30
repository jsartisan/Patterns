<?php namespace Pattern;

/**
 * A Composite implementation, which accepts as children generic Components.
 * These children may be H1, P or even other Divs.
 */
class Div implements HtmlElement
{
  private $_children = array();

  public function addChild(HtmlElement $element)
  {
    $this->_children[] = $element;
  }

  public function __toString()
  {
    $html = "<div>\n";
    foreach ($this->_children as $child) {
      $childRepresentation = (string) $child;
      $childRepresentation = str_replace("\n", "\n    ", $childRepresentation);
      $html .= '    ' . $childRepresentation . "\n";
    }
    $html .= "</div>";
    return $html;
  }
}