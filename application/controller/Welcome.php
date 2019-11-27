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


class Welcome extends \Core\Classes\Controller
{
    public function index()
    {
        \Core\Classes\View::show('welcome.html');
    }
}