<?php
class soma_final_carrinho{
    public static function soma($id){
        $con = conecta_banco::conecta();
        //query que retorna o valor total do carrinho do usuário
        $sql = "SELECT SUM(c.valor_produto) as soma FROM adireto.carrinho as a INNER JOIN adireto.cadastros as b, adireto.produtos as c WHERE a.id_produto=c.id_produto and a.id_user =$id and b.id_cadastro=$id;";
        $sql = $con -> prepare($sql);
        $sql->execute();
        $result = array();
        while($row = $sql->fetchObject('consulta_prod')){
            $result[] = $row;
        }
    return  $result;
    }
}