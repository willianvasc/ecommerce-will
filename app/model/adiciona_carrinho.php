<?php
class adiciona_carrinho
{
    public static function adicionar()
    {
        $con = conecta_banco::conecta();
        $sql = "INSERT INTO login.carrinho(id_produto,id_user) VALUES($_GET[produto],$_SESSION[id])";
        $sql = $con -> prepare($sql);
        $sql->execute();
        if($sql->rowCount()){
            return true;
        }
    }
}
