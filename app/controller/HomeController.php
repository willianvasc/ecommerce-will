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
        $parametros_home = array();
   
        //chama a função de exibir os produtos cadastrados
        $produtos = consulta_prod::consulta();
        /////////////
        $parametros_home['produtos'] = $produtos;

        $conteudo = $template->render($parametros_home);
        $footer = file_get_contents('app/view/templates/footer.html');
        //exibe os conteúdos da página
   
        echo $conteudo;
        echo $footer;
    }
}
