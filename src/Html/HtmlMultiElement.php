<?php
namespace Html;

//Herencia y propiedades


  class HtmlMultiElement extends HtmlElement
  {
      protected $children;

      public function __construct(
      $tag,
      array $attributes = [],
      $content = null
      )
   {
      parent::__construct($tag, $attributes, $content);
      $this->children = [];
      }

      public function addChild(HtmlElement $element)
      {
          $this->children[] = $element;
      }

      public function getChildren()
      {
           return $this->children;
      }

  }