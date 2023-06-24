<?php

class conecta_banco {
    private static $conn;
    public static function conecta(){
        if(self::$conn==null){
        //query para conexão com o banco de dados
        self::$conn = new PDO('mysql: host=localhost; dbname:login;', 'root','');
        }
        return self::$conn;
    }
}

?>

