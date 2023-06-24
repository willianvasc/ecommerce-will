<?php
class CadastroProdController
{
  public static function index()
  {
    //chama a view
    $loader = new \Twig\Loader\FilesystemLoader('app/view');
    $twig = new \Twig\Environment($loader);
    $template = $twig->load('cadastro_produto.html');
    $conteudo = $template->render();
    //////////////
    //chama o header e o footer
    $header = file_get_contents('app/view/templates/header.html');
    $footer = file_get_contents('app/view/templates/footer.html');
    //exibe os conteúdos da página
    echo $header;
    echo $conteudo;
    echo $footer;
    if (isset($_POST['cadastroProd'])) {
      cadastro_produto::cadastro($_POST, $_FILES);
    }
    //////////////
  }
}
