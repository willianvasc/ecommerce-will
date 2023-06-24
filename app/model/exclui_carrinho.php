<?php
class exclui_carrinho
{
    public static function exclui($id)
    {
        $con = conecta_banco::conecta();
        $sql = "DELETE FROM login.carrinho where id_carrinho='$id'";
        $sql = $con->prepare($sql);
        $sql->execute();
        header('Location:carrinho');
    }
}
