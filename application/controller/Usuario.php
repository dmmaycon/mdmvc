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
        $this->listar();
    }

    public function listar()
    {
        $u = new \App\Model\Usuario;
        \Core\Classes\View::show('Usuario/lista.html', [
            'usuarios' => $u->get()
        ]);  
    }


    /**
     * Exibe o form para operacoes de cadastro e alteracao e exclusao
     */
    public function form()
    {
        $op = $_GET['op'];
        $data = [];
        $data['op'] = $op;
        switch ($op) {
            case 'altera':
                $id = $_GET['id'];
                $u = new \App\Model\Usuario;
                $data['usuario'] = $u->get($id);
                break;
        }
        \Core\Classes\View::show('Usuario/form.html',$data);
    }


    /**
     * Exibe o form para operacoes de cadastro e alteracao e exclusao
     */
    public function recebePost()
    {
        $op = $_GET['op'];
        $data = [];
        switch ($op) {
            case 'inclui':
                $u = new \App\Model\Usuario;
                $u->setNome($this->post['nome']);
                $u->setLogin($this->post['login']);
                $u->setEmail($this->post['email']);
                $u->setSenha($this->post['senha']);
                $u->insert();
                break;
            case 'altera':
                $u = new \App\Model\Usuario;
                $u->setNome($this->post['nome']);
                $u->setLogin($this->post['login']);
                $u->setEmail($this->post['email']);
                if ($this->post['senha'] != '') {
                    $u->setSenha($this->post['senha']);
                }
                $u->update($this->post['id']);
                break;
            case 'deleta':
                $u = new \App\Model\Usuario();
                $u->delete($_GET['id']);
                break;
        }

        $this->index();
    }
}