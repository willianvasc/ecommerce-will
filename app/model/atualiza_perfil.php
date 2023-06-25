<?php
class atualiza_perfil
{
    public static function atualiza($id,$post)
    {
        $con = conecta_banco::conecta();
        //query para mostrar os dados do usuário logado
        $sql = "UPDATE adireto.cadastros SET nome_user = '$post[nome]', email='$post[email]', telefone='$post[telefone]',endereco='$post[endereco]',bairro='$post[bairro]',numero_casa='$post[numero]' WHERE id_cadastro=$id";
        $sql = $con->prepare($sql);
        $sql->execute();
        $result = array();
        header('Location:perfil');
        while ($row = $sql->fetchObject('atualiza_perfil')) {
            $result[] = $row;
        }
        return  $result;
    }
}
