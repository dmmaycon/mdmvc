<?php
/**
 * Classe para conexão via PDO com o banco de dados
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 */

namespace Core\Classes;

use \Core\Classes\Database;

class Database
{
    private static $drive;
    private static $host;
    private static $dbName;
    private static $user;
    private static $password;

    public static $db;

    private static $pathFileConfig = '././application/config/db-config.ini';

    // implementação do padrão de projetos singleton
    private function __construct(){}

    public static function getInstance()
    {
        if (!isset(self::$db)) {
            if (file_exists(self::$pathFileConfig)) {
                $ini = parse_ini_file(self::$pathFileConfig);
                self::$drive    = $ini['drive'];
                self::$host     = $ini['host'];
                self::$dbName   = $ini['dbName'];
                self::$user     = $ini['user'];
                self::$password = $ini['password'];                
                // adciona o PDO para a instancia estatica do db
                self::$db = new \PDO(''. self::$drive .':host='. self::$host .';dbname=' . self::$dbName .'', self::$user, self::$password); 
                self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ); 
           } else {
               die('Arquivo de configuração de banco de dados não existente!');
           }
        }
        return self::$db;   
    }

    public function closeInstance()
    {
        self::$db = null;
    }

}