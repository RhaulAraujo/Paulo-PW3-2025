<?php
    include "conexao.php";
    
    //DAO - CRUD

    class ModelPessoa{
        public function inserir(Pessoa $pessoa){
            $sql = "insert into pessoa(cpf, nome, contato)
            values(?, ?, ?)";
            $con = new conexao();
            $bd = $con->getconexao();
            
            $stm = $bd-> prepare($sql);
            $stm ->bindValue(1, $pessoa->get_Cpf());
            $stm ->bindValue(2, $pessoa->get_Nome());
            $stm ->bindValue(3, $pessoa->get_Contato());
            $stm -> execute();
            if($Resultado){
                echo"Cadastro  com sucesso";

            }
            else{

                echo "erro!!!";
        }
    }
}




?>