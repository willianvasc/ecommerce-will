<?php
class CadastroUsuarioAdminController
{
    public function index()
    {
        conecta_banco::conecta();
        session_start();
        //chama a view
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('cadastro_user_admin.html');
        $parametros = array();
        //////////////

        //função que valida se a pessoa é adm
        if ($_SESSION['adm'] != "1") {
            header('Location:/login_adireto/home');
        }
        //passa os parametros para a página
        $conteudo = $template->render($parametros);
        /////////////
        //Exibe a página
        echo $conteudo;
        ////////////
        if (isset($_POST['cadastrar_adm'])) {
            //chama a função para validar o e-mail do cadastro
            $count = valida_email::valida($_POST['email']);
            ///////////////////////////////////////////////
            foreach ($count as $cont) {
                if ($cont->cont >= 1) {
                    //Exibe mensagem caso o e-mail já esteja cadastrado
                    echo "<script>alert('E-mail já cadastrado!')</script>";
                } else {
                    cadastro__usuario_adm::cadastro_user($_POST);
                    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
                }
            }
        }
    }
}
