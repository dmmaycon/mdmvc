<?php
/**
 * Model de Usuário do MDMVC
 * Esta classe mostra como a abstração da \Core\Classes\Model contém os metodos
 * bases para lidar com o banco de dados atrávez do PDO.
 * A responsabilidades desta camada é modelos de negócio ou implementação mais complexa 
 * da camada de dados.
 * 
 * 
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 */

namespace App\Model;

class Usuario extends \Core\Classes\Model
{
    // nome da tabela
    protected $table = 'usuarios';

    /**
     * Métodos setters e getters da classe
     */
    public function setNome(String $nome)
    {
        $this->nome = ucwords($nome);
    }

    public function setLogin(String $login)
    {
        $this->login = trim(strtolower($login));
    }

    public function setEmail(String $email)
    {
        if (filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            $this->email = trim($email);
        } else {
            throw new Exception("Invalid E-mail", 1);   
        }
    }

    public function setSenha(String $senha)
    {
        $this->senha = hash('sha256', $senha);
    }


    /**
     * Autentica se usuario existe no banco de dados
     */
    public function authDb()
    {
        $sql = "SELECT * from " . $this->table ." WHERE login = '" . $this->data['login'] . "' and senha = '" . $this->data['senha'] . "'";
        $ret = $this->con->query($sql)->fetch();

        if (empty($ret)) {
            return false;
        } else {            
            \Core\Classes\Security::loginRegister($ret);
            return true;
        }
    }

}