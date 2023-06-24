<?php
class login_user
{
    public static function login($post)
    {   
        $con = conecta_banco::conecta();
        $senha = $post['senha'];
        $user = $post['email'];
        //query para verificar se login e senha estão corretos
        $sql = "SELECT * FROM login.cadastros where email=:email and senha=:senha";
        $sql = $con->prepare($sql);
        //evita que haja sql injeqtion no campo de login
        $sql->bindValue(':email',$user);
        $sql->bindValue(':senha',$senha);
        ////////////////////////////////////////////////
        $sql->execute();
        $resultado = array();
        while ($row = $sql->fetchObject('login_user')) {
            $resultado[] = $row;
        }
        foreach ($resultado as $user) {
            $_SESSION['id'] = $user->id_cadastro;
            $_SESSION['adm'] = $user->admin_status;
        }
        return $resultado;
    }
}
