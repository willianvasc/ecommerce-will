<?php
class PerfilController
{
    public static function index()
    {
        session_start();
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('perfil.html');
        //Chama a função de validar o login
        verifica_login::valida();
        //////////////
        $parametros = array();
        $dados = perfil::exibe($_SESSION['id']);
        $parametros['dados'] = $dados;
        $conteudo = $template->render($parametros);
        $header = file_get_contents('app/view/templates/header.html');
        $footer = file_get_contents('app/view/templates/footer.html');

        echo $header;
        echo $conteudo;
        echo $footer;
    }
}
