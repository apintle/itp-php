<?php
class HtmlRenderer
{
   public function render(HtmlElement $element)
   {
 

          $html = sprintf(
              '<%s %s>%s</%s>',
          $element->tag,
          $this->renderAttributes($element->getAttributes()),
          $element->getContent(),
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