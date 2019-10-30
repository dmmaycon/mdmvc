<?php
/**
 * Arquivo contendo funções que podem ser chamadas em todo o sistema
 */

function debug($var, $continue = false) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    if (!$continue) {
        die();
    }
}