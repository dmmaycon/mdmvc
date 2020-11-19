<?php
/**
 * Controller Home
 * Padrão da aplicação, ao baixar e executar o framework a primeira vez 
 * cai na pagina de Welcome
 * 
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 */

namespace App\Controller;


class WelcomeController extends \Core\Classes\Controller
{
    /**
     * Sobrescreve o contrutor padrão para que o controller
     * Welcome não controle login em todos os métodos
     */
    public function __construct($logado = false)
    {
        parent::__construct($logado);
    }

    // Método que não exige autenticação
    public function index()
    {
        \Core\Classes\View::show('welcome.html');
    }

    // Método que exige autenticação
    public function logado()
    {
        parent::logado();
        \Core\Classes\View::show('welcome.html', [
            'logado' => 'Você está logado!'
        ]);
    }
}