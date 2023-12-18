<?php
class loginController
{
    public function index()
    {
        conecta_banco::conecta();
        session_start();
        $_SESSION['logado'] = "0";
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('login.html');
        $parametros = array();

        if (isset($_POST['login'])) {
            $login_result = login_user::login($_POST);
            foreach ($login_result as $login) {
                if ($login->id_cadastro != "") {
                    $_SESSION['logado'] = "1";
                    header('Location:' . $_SERVER['HTTP_ORIGIN'] . '/projeto_carrinho_adireto/home');
                }
            }
        }
        $conteudo = $template->render($parametros);

        echo $conteudo;
    }
}
