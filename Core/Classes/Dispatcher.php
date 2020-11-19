<?php
/**
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 * Description: Classe que faz as distribuições de classes e metódos no sistema
 */
namespace Core\Classes;

use \Core\Classes\UrlParser;

class Dispatcher
{
    private $urlParser;


    public function __construct()
    {
        $this->urlParser = new UrlParser();
        $this->setRoute($this->urlParser);
        
    }


    public function setRoute(UrlParser $up)
    {
        if (file_exists('././Application/Controller/'. $up->getClass() .'Controller.php')) {
            $classController = "\\App\\Controller\\{$up->getClass()}Controller";   
            $obj = new $classController;
            if (method_exists($obj, $up->getMethod())) {
                $method = $up->getMethod();
                return $obj->$method();
            } else {
                return $obj->index();
            }
            
        } else {
            redirect(DEFAULTCONTROLLER);
        }
    }
}