<?php
class exclui_carrinho
{
    public static function exclui($id)
    {
        $con = conecta_banco::conecta();
        //query para excluir o item do carrinho
        $sql = "DELETE FROM adireto.carrinho where id_carrinho='$id'";
        $sql = $con->prepare($sql);
        $sql->execute();
        header('Location:carrinho');
    }
}
