<?php
/**
 * Controller de tarefas
 * Author: Maycon de Moraes
 * Date:   19/11/2020
 */

namespace App\Controller;


class TarefaController extends \Core\Classes\Controller
{
    public function index()
    {
        $this->listar();
    }

    public function listar()
    {
        $tarefa = new \App\Model\Tarefa;
        \Core\Classes\View::show('Tarefa/lista.html', [
            'tarefas' => $tarefa->get()
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
                $tarefa = new \App\Model\Tarefa;                
                $data['tarefa'] = $tarefa->get($id);
                break;
        }
        \Core\Classes\View::show('Tarefa/form.html',$data);
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
                $tarefa = new \App\Model\Tarefa;
                $tarefa->setNome($this->post['nome']);
                $tarefa->setDescricao($this->post['descricao']);
                $tarefa->setStatus($this->post['status']);
                $tarefa->insert();
                break;
            case 'altera':
                $tarefa = new \App\Model\Tarefa;
                $tarefa->setNome($this->post['nome']);
                $tarefa->setDescricao($this->post['descricao']);
                $tarefa->setStatus($this->post['status']);
                $tarefa->update($this->post['id']);
                break;
            case 'deleta':
                $tarefa = new \App\Model\Tarefa();
                $tarefa->delete($_GET['id']);
                break;
        }

        $this->index();
    }
}