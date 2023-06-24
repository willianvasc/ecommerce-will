<?php
class perfil{
    public static function exibe($id) {
        $con = conecta_banco::conecta();
        //query para mostrar os dados do usuário logado
        $sql = "SELECT * FROM login.cadastros where id_cadastro=$id";
        $sql = $con -> prepare($sql);
        $sql->execute();
        $result = array();
        while($row = $sql->fetchObject('consulta_prod')){
            $result[] = $row;
        }
    return  $result;
    }
}
