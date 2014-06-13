<?php
namespace Autoloading;

class Autoloader

{

      public function __invoke($className)
      {
         $this->autoload($className);
      }

      public function autoload($className) 
      {
        require str_replace('\\', '/', $className) . '.php';
      }

      public function register()
      {
         spl_autoload_register($this);
      }
}
