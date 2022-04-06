<?php

namespace app\models;
use app\core\Model;

class Funcionario extends Model{
    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM funcionario";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
        
    }

    //Método responsável por inserir dados no bd
    public function inserir($funcionario){
        //$nome = $_POST["nome"];
        //INSERT INTO funcionario (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO funcionario SET
            nome        =:nome,
            cpf         =:cpf,
            telefone    =:telefone,
            dtadmissao  =:dtadmissao           
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":nome", $funcionario->nome);
        $qry->bindValue(":cpf", $funcionario->cpf);        
        $qry->bindValue(":telefone", $funcionario->telefone);        
        $qry->bindValue(":dtadmissao", $funcionario->dtadmissao);
        

        $qry->execute();

        return $this->db->lastInsertId();


    }

    public function getFuncionario($id)
    {
        $sql = "SELECT * FROM funcionario WHERE idfuncionario = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($funcionario)
    {
       
        $sql = "UPDATE funcionario SET
            nome        =:nome,
            cpf         =:cpf,            
            telefone    =:telefone,            
            dtadmissao  =:dtadmissao
            
            WHERE idfuncionario = :id
        ";

        $qry = $this->db->prepare($sql);

        $qry->bindValue(":nome", $funcionario->nome);
        $qry->bindValue(":cpf", $funcionario->cpf);        
        $qry->bindValue(":telefone", $funcionario->telefone);        
        $qry->bindValue(":dtadmissao", $funcionario->dtadmissao);
        $qry->bindValue(":id", $funcionario->idfuncionario);  

        $qry->execute();
        return $funcionario->idfuncionario;
    }

    public function excluir($id){

        $sql = "DELETE FROM funcionario where idfuncionario = $id";

        $qry = $this->db->query($sql);
        

    }
}