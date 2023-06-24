<?php 
class valida_email{
    public static function valida($email){
            $con = conecta_banco::conecta();
            //query para ver se já existe o e-mail do cadastro no banco de dados
            $sql = "SELECT count(*) as cont FROM login.cadastros WHERE email='$email'";
            $sql = $con -> prepare($sql);
            $sql->execute();
            $count_email = array();
            while($row = $sql->fetchObject('valida_email')){
                $count_email[] = $row;
            }
        return $count_email;
    
}
}