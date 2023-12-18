<?php
class HeaderController
{
    public function index()
    {
        conecta_banco::conecta();
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);

        $header = $twig->load('templates/header.html');
        $parametros_header = array();
        ///////////////
        //Chama a função de validar o login
        verifica_login::valida();
        $parametros_header['adm'] = $_SESSION['adm'];
        $header = $header->render($parametros_header);
        echo $header;
    }
}
