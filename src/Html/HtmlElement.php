<?php
namespace Html;

class HtmlElement
{
    protected $tag;
    protected $content;
    protected $attributes;

//constructor. deben ser publicos. deben ir con una función. 
    public function __construct(
       $tag,
        $attributes = [],
       $content = null
    )
    {
       $this->tag = $tag;
       $this->content = $content;
       $this->attributes = $attributes;
    }



   public function __get($property)
   {
      if ('tag' === $property){
      return $this->tag;
      }
   }

   public function __set($property, $value)
   {
      if ('content' === $property){
         $this->content = $value;
      }
   }

   public function getTag()
   {
      return $this->tag;
   }

   public function getContent()
   {
      return $this->content;
   }
   public function getAttributes()
   {
      return $this->attributes;
   }


}


