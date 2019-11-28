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

    // variaveis a serem recuperadas nos controllers
    protected $post;

    /**
     * Construtor padrão do controller base
     */
    public function __construct(Bool $logado = true)
    {
        if ($logado) {
            $this->logado();
        }
        $this->filterData(); // sanitiza o $_POST
        $this->twig = View::getInstanceTwig();
    }

    public function index()
    {
        echo 'Controller Base';
    }


    /**
     * Atua no $_POST para filtrar 
     * dados de entrada do cliente e disponibiliza 
     * os dados nos atributos $post
     */
    private function filterData()
    {
        // se veio um post para o controller
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST as $key => $value) {
                $this->post[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
            }
        }
    }

    /**
     * Verifica se existe um POST
     */
    protected function checkPost() : Bool
    {
        if (empty($this->post)){
            //  'Implementar alerta dizendo que esta pagina precisa de um POST';
            return false;
        }
        return true;
    }


    /**
     * Este método fornece a segurança para métodos que 
     * exijam que o usuário esteja logado
     * Se todo o controller exigir autenticação basta 
     * informar ele no contrutor
     * Para uso em métodos basta chamar ele a cada metodo
     */
    protected function logado()
    {
        if(!\Core\Classes\Security::isAtivo()){
            redirect('/');
        } 
    }
}