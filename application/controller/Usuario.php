<?php
/**
 * Controller padrão do Usuario
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 */

namespace App\Controller;


class Usuario extends \Core\Classes\Controller
{
    public function index()
    {
        $this->exemploListar();
    }

    public function exemploListar()
    {
        $u = new \App\Model\Usuario;
        debug($u->get());   
    }


    public function exemploInserir()
    {
        $u = new \App\Model\Usuario;
        $u->nome  = "Joao";
        $u->email = "joao@email.com";
        $u->nascimento = '2000-01-02';

        debug($u->insert(1));
    }

    public function exemploAlterar()
    {
        $u = new \App\Model\Usuario();
        $u->nome  = "Maycon Douglas";
        $u->email = "mayconmoraes@email.com";
        $u->nascimento = '1997-02-13';
        debug($u->update(1));
    }

    public function exemploExcluir()
    {
        $u = new \App\Model\Usuario();
        debug($u->delete(3));
    }
}