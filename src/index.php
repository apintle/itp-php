<?php



require 'Autoloading/Autoloader.php';

use Html\HtmlElement;
use Html\HtmlRenderer;
use Autoloading\Autoloader;
use Html\HtmlMultiElement;

$autoloader = new Autoloader();
$autoloader->register();

$link = new HtmlElement(
    'a',
    ['href' => 'http://www.google.com.mx'],
    'Google'
);

$renderer = new HtmlRenderer();
echo $renderer->render($link);
echo $link->tag; 
$link->content = 'Yahoo';   
echo $renderer->render($link);      

$list = new HtmlMultiElement('ul');
$list->addChild(new HtmlElement('li', [], 'PHP'));
$list->addChild(new HtmlElement('li', [], 'Java'));
$list->addChild(new HtmlElement('li', [], 'C#'));
$list->addChild(new HtmlElement('li', [], 'Scala'));
echo $renderer->render($list);      