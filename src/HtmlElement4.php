<?php
//con metodo magico toString
//
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

//metodos magicos
    public function __call($name, $arguments)
    {
     }

//metod render

      public function render()
      {
          $html = sprintf(
              '<%s %s>%s</%s>',
          $this->tag,
          implode('=', $this->attributes),
          $this->content,
          $this->tag
      );

      return $html;
      }
//convierte a un string

   public function __toString()
   {    
         return $this->render();
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



}


$link = new HtmlElement(
    'a',
    ['href' => 'http://www.google.com.mx'],
    'Google'
);

//muestra con Google
echo $link->render(['class' => 'important-link']);
echo $link->tag; //muestra el tag . llama el get
$link->content = 'Yahoo';   //llama al set
echo $link;      //lama a render

// render es cualquier nombre de metodo, 
//primero pregunta si $link es un objeto, pregunta si lo tiene el metodo toString y lo manda llamar lo convierte a cadena y li imprime, caso contrario marca error porque así no se puede imprimir.


