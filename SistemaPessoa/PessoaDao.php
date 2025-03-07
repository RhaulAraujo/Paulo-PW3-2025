<?php
//Crud - create,read,update,delete (cadastrar, buscar, atualizar, apagar)
include("conexao.php");

class PessoaDao{
    public function cadastrar(pessoa $pessoa){
        $sql = "insert into pessoa (cpf, nome, contato) values (?, ?, ?)";
        $bd = new Conexao();
        $banco = $bd->getConexao();
        $stm = $bd->prepare($sql);
        $stm->bindValue(1, $pessoa->get_Cpf());
        $stm->bindValue(2, $pessoa->get_Nome());
        $stm->bindValue(3, $pessoa->get_Contato());
        $resultado = $stm->execute();
        if($resultado){
            echo "cadastrado com sucesso";
        }else{
            echo "Erro ao cadastrar";
        }
}
    public function consultar(pessoa $pessoa){

    }
    public function apagar(pessoa $pessoa){
        $sql = "delete from pessoa where cpf=?";
        $bd = new Conexao();
        $banco = $bd->getConexao();
        $stm = $banco->prepare($sql);
        $stm->bindValue(1, $pessoa->get_Cpf());
        $resultado = $stm->execute();
        if($resultado){
            echo "Deletado com sucesso";
        }else{
            echo "Erro ao deletar";
        }
    }
    public function atualizar(pessoa $pessoa){
        $sql = "Update pessoa set nome=?, contato=? where cpf=?";
        $bd = new Conexao();
        $banco = $bd->getConexao();
        $stm = $bd->prepare($sql);
        $stm->bindValue(3, $pessoa->get_Cpf());
        $stm->bindValue(2, $pessoa->get_Nome());
        $stm->bindValue(3, $pessoa->get_Contato());
        $resultado = $stm->execute();
        if($resultado){
            echo "cadastrado com sucesso";
        }else{
            echo "Erro ao cadastrar";
        }
    }
}