<?php
class produto_interno
{
    public static function produto($id)
    {
        $con = conecta_banco::conecta();
        //query para mostrar os dados da página interna do produto
        $sql = "SELECT * FROM adireto.produtos where id_produto=$id";
        $sql = $con -> prepare($sql);
        $sql->execute();
        $result = array();
        while($row = $sql->fetchObject('consulta_prod')){
            $result[] = $row;
        }
    return  $result;
    }
}
