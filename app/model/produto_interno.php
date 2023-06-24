<?php
class produto_interno
{
    public static function produto($id)
    {
        $con = conecta_banco::conecta();
        $sql = "SELECT * FROM login.produtos where id_produto=$id";
        $sql = $con -> prepare($sql);
        $sql->execute();
        $result = array();
        while($row = $sql->fetchObject('consulta_prod')){
            $result[] = $row;
        }
    return  $result;
    }
}
