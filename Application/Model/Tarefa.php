<?php
/**
 * Model de Tarefas do MDMVC
 * Esta classe mostra como a abstração da \Core\Classes\Model contém os metodos
 * bases para lidar com o banco de dados atrávez do PDO.
 * A responsabilidades desta camada é modelos de negócio ou implementação mais complexa 
 * da camada de dados.
 * 
 * 
 * Author: Maycon de Moraes
 * Date:   19/11/2020
 */

namespace App\Model;

class Tarefa extends \Core\Classes\Model
{
    // nome da tabela
    protected $table = 'tarefas';

    /**
     * Métodos setters e getters da classe
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(String $nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao(String $descricao)
    {
        $this->descricao = $descricao;
    }

    public function setStatus($status)
    {
        if ($status == 'on') {
            $this->status = 1; // encerrada
        } else {
            $this->status = 0;// aberta
        }
        
    }


}