<?php
/**
 * Author: Maycon de Moraes
 * Date:   30/10/2019
 * Description: Classe tem que validar se o usuario esta logado
 */

namespace Core\Classes;

interface Auth
{
    // verifica se o usuario esta logado
    public function isLogado();
}