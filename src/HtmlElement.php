<?php
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

//metodo magico
    public function __call($name, $arguments)
    {
      if ('render' === $name) {
          $html = sprintf(
              '<%s %s>%s</%s>',
          $this->tag,
          implode('=', $this->attributes),
          $this->content,
          $this->tag
      );

      return $html;
      }
//      var_dump($name);
//    var_dump($arguments);
}

}


$link = new HtmlElement(
    'a',
    ['href' => 'http://www.google.com.mx'],
    'Google'
);


echo $link->render(['class' => 'important-link']);



// render es cualquier nombre de metodo, 


//
//<a href="http://www.google.com.mx">Google</a>
//<span>Nombre</span>
//<br>
