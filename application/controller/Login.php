<?php
/**
 * Controller Login
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 */

namespace App\Controller;

class Login extends \Core\Classes\Controller
{
    /**
     * Recebe o post do login
     */
    public function logar()
    {
        if ($this->checkPost()) {
            $usuario = new \App\Model\Usuario;
            $usuario->setLogin($this->post['usuario']);
            $usuario->setSenha($this->post['senha']);
            $usuario->authDb();
            redirect('/Welcome');
        } else {
            redirect('/Welcome');
        }
    }


    public function logof()
    {
        \Core\Classes\Security::destroy();
        redirect('/Welcome');
    }
}