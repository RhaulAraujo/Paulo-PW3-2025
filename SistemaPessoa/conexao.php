<?php 

    class conexao{
        public statis $instancia;

        public static function getconexao(){
            if(!isset (self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost;dbname=cadastropessoa; charset =utf8', 'root', '');
                return self::$instancia;
            }else{
                return self::$instancia;
            }
        }
    }



?>