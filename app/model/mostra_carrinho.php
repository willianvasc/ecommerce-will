<?php 
class mostra_carrinho{
    public static function exibe(){
        session_start();
            $con = conecta_banco::conecta();
            $sql = "SELECT a.id_carrinho,c.nome_produto,c.valor_produto FROM login.carrinho as a INNER JOIN login.cadastros as b, login.produtos as c WHERE a.id_produto=c.id_produto and a.id_user = $_SESSION[id] and b.id_cadastro= $_SESSION[id]";
            $sql = $con -> prepare($sql);
            $sql->execute();
            $result = array();
            while($row = $sql->fetchObject('consulta_prod')){
                $result[] = $row;
            }
        return  $result;
    
}
}