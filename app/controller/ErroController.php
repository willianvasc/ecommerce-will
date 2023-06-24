<?php 
    class ErroController{
        public function index(){
            //página de erro
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('404.html');
            $conteudo = $template->render();
            echo $conteudo;
            /////////////////////
        }
    }
    ?>