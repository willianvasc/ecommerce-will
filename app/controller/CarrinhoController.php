<?php
class CarrinhoController
{
    public function index()
    {
        conecta_banco::conecta();
        //chama a view
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('carrinho.html'); 
        $parametros = array();
        //////////////
        //chama a função de mostrar o carrinho da conta logada e mostra o valor final do carrinho
        $itens = mostra_carrinho::exibe();
        $soma = soma_final_carrinho::soma($_SESSION['id']);
        $parametros['soma']= $soma;
        $parametros['itens']=$itens;
        //////////////
        //exibe o conteudo da página com seus parâmetros
        $conteudo = $template->render($parametros);
        //////////////
        //chama a função de excluir o post passando o id do item do carrinho como parêmtro
        if(isset($_POST['exclui'])){
         exclui_carrinho::exclui($_POST['id']);   
        }
         //////////////
        $header=file_get_contents('app/view/templates/header.html');
        //exibe o conteúdo da página
        echo $header;
        echo $conteudo;
    }
}
