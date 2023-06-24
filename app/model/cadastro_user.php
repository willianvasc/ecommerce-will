<?php
class cadastro_sql
{
    public static function cadastro_user($post)
    {
        $con = conecta_banco::conecta();
        $nome = $post['nome'];
        $telefone = $post['telefone'];
        $email = $post['email'];
        $senha = $post['senha'];
        $endereco = $post['endereco'];
        $bairro = $post['bairro'];
        $numero = $post['numero'];
        //query para cadastrar um novo usuário
        $sql = "INSERT INTO login.cadastros(nome_user,email,senha,telefone,endereco,bairro,numero_casa) VALUES(:nome,:email,:senha,:telefone,:endereco,:bairro,:numero)";
        //evita que haja sql injeqtion no campo de login
        $sql = $con->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':numero', $numero);
        ////////////////////////////////////////////////
        $sql->execute();
        if ($sql->rowCount()) {
            return true;
        }
    }
}
