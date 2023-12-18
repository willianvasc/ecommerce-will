<?php
class ProdutoController
{
    public function index()
    {
        conecta_banco::conecta();
        session_start();
         if ( $_SESSION['logado']!="1") {
            header('Location:' . $_SERVER['HTTP_ORIGIN'] . '/projeto_carrinho_adireto/login');
        }
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('produto_interno.html');
        $parametros = array();
        $produto = produto_interno::produto($_GET['produto']);
        $parametros['produto'] = $produto;

        $conteudo = $template->render($parametros);
        $header=file_get_contents('app/view/templates/header.html');
        if(isset($_POST['adiciona_carrinho'])){
            adiciona_carrinho::adicionar();
            echo "<script>alert('Produto adicionado ao carrinho!')</script>";
        }
        $footer = file_get_contents('app/view/templates/footer.html');
        //exibe os conteúdos da página
        echo $header;
        echo $conteudo;
        echo $footer;
    }
}
