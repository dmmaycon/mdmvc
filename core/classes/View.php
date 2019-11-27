<?php
/**
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 * Description: Classe para abstratir algumas camadas que lidarão com a view
 */

namespace Core\Classes;

abstract class View
{
    private static $fileAppPathView     = '././application/view/html'; 
    private static $fileCorePathView    = '././core/template';
    private static $pathCache           = '././application/view/cache';
    private static $autoReload          = true; 

    public static $twig;

    // deixar a contrução da instancia do twig singleton
    private function __construct(){}


    /** 
     * Retorna uma unica instancia do twig
     */
    public static function getInstanceTwig()
    {
        if (!isset(self::$twig)) {
            $loader = new \Twig\Loader\FilesystemLoader([self::$fileAppPathView, self::$fileCorePathView]);
            self::$twig = new \Twig\Environment($loader, [
                'cache' => self::$pathCache,
                'auto_reload' => self::$autoReload,
            ]);
        }
        return self::$twig;
    }

    /**
     * Abstrai a maneira de mostrar a view do framewok
     * desta maneira ele sempre mostra os dados dentro do template padrão
     */
    public static function show(String $file, Array $data = [], Array $dataBase = [])
    {   
        $template = self::$twig->render($file, $data);
        
        $dataBase['main']   = $template;
        $dataBase['logado'] = \Core\Classes\Security::isAtivo();
        $dataBase['session'] = $_SESSION;
        self::$twig->display('layout-base.html',$dataBase);
    }
}