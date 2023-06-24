<?php
class cadastroController
{
    public function index()
    {
        conecta_banco::conecta();
        //chama a view
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('cadastro.html');
        $parametros = array();
        //////////////
        //passa os parametros para a página
        $conteudo = $template->render($parametros);
        /////////////
        //Exibe a página
        echo $conteudo;
        ////////////
        if (isset($_POST['enviar'])) {
            //chama a função para validar o e-mail do cadastro
            $count = valida_email::valida($_POST['email']);
            ///////////////////////////////////////////////
            foreach ($count as $cont) {
                if ($cont->cont >= 1) {
                    //Exibe mensagem caso o e-mail já esteja cadastrado
                    echo "<script>alert('E-mail já cadastrado!')</script>";
                } else {
                    cadastro_sql::cadastro_user($_POST);
                    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
                }
            }
        }
    }
}
