<?php
namespace Html;
//namespace Html; //debe llvarlo en la primera linea
class HtmlRenderer
{
   
 public function render(HtmlElement $element)
   {
          $content = $element->getContent();
          if ($element instanceof HtmlMultiElement) {
             foreach ($element->getChildren() as $child) {
               $content .= $this->render($child);
        }
      }


          $html = sprintf(
              '<%s %s>%s</%s>',
          $element->tag,
          $this->renderAttributes($element->getAttributes()),
          $content,
          $element->tag
      );
     return $html;
    }  

    protected function renderAttributes(array $attributes)
    {
        $htmlAttributes = '';
        foreach ($attributes as $key => $value) {
           $htmlAttributes .= "\"$key=$value\" ";
        }
        return $htmlAttributes;
    }




}