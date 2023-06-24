<?php
class HomeController
{
    public function index()
    {
        conecta_banco::conecta();
        session_start();
        //chama a view
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('home.html');
        ///////////////
        //Chama a função de validar o login
        verifica_login::valida();
        //////////////
        $parametros = array();
        //chama a função de exibir os produtos cadastrados
        $produtos = consulta_prod::consulta();
        /////////////
        $parametros['produtos'] = $produtos;
        $parametros['adm']=$_SESSION['adm'];
        $header = file_get_contents('app/view/templates/header.html');
        $conteudo = $template->render($parametros);
        $footer = file_get_contents('app/view/templates/footer.html');
        //exibe os conteúdos da página
        echo $header;
        echo $conteudo;
        echo $footer;
    }
}
