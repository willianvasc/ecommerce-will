<?php
class verifica_login
{
    //classe que verifica se o usuário está logado
    public static function valida()
    {
        if ($_SESSION['logado'] != "1") {
            // header('Location:' . $_SERVER['HTTP_ORIGIN'] . '/projeto_carrinho_adireto/login');
        }
    }
}
