<?php
/**
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 * Description: Classe que contem o controller padrão do framework
 */

namespace Core\Classes;

use \Core\Classes\View;

abstract class Controller
{
    protected $twig; // guarda a instancia do twig
    protected $title; // Titulo da Pagina

    /**
     * Construtor padrão do controller base
     */
    public function __construct()
    {
        $this->twig = View::getInstanceTwig();
    }

    public function index()
    {
        echo 'teste';
    }
}