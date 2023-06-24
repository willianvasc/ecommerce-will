<?php 
class consulta_prod{
    public static function consulta(){
            $con = conecta_banco::conecta();
            //query para listar todos os produtos cadastrados
            $sql = "SELECT * FROM login.produtos";
            $sql = $con -> prepare($sql);
            $sql->execute();
            $result = array();
            while($row = $sql->fetchObject('consulta_prod')){
                $result[] = $row;
            }
        return  $result;
    
}
}