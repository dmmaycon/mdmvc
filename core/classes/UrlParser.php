<?php
/**
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 * Description: Classe que trata de quebrar as URLS e retornar o que é classe e 
 * o que é parametro
 */

namespace Core\Classes;

class UrlParser
{
    private $url;
    private $class;
    private $method;


    public function __construct()
    {
        $this->getUrlData();
    }


    /**
     * Recupera as informações da requisição
     */
    private function getUrlData()
    {
        $this->url = $_SERVER['REQUEST_URI'];
        $arrUrl = explode('/', $this->url);
        unset($arrUrl[0]);
        $this->class  = $arrUrl[1]  ??  'Padrao';
        $this->method = $arrUrl[2]  ??  'index';
    }


    // metodos acessores
    public function getClass()
    {
        return $this->class;
    }

    public function getMethod()
    {
        return $this->method;
    }
}