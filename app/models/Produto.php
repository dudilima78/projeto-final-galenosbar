<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM produto";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
        
    }

    //Método responsável por inserir dados no bd
    public function inserir($produto){
        //$produto = $_POST["produto"];
        //INSERT INTO produto (produto,idade) values ('$produto','$idade');

        $sql = "INSERT INTO produto SET
            produto       =:produto,
            precocusto    =:precocusto,
            precovenda    =:precovenda      
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":produto", $produto->produto);
        $qry->bindValue(":precocusto", $produto->precocusto);        
        $qry->bindValue(":precovenda", $produto->precovenda);        

        $qry->execute();

        return $this->db->lastInsertId();


    }

    public function getProduto($id)
    {
        $sql = "SELECT * FROM produto WHERE idproduto = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($produto)
    {
       
        $sql = "UPDATE produto SET
            produto       =:produto,
            precocusto    =:precocusto,            
            precovenda    =:precovenda       

            
            WHERE idproduto = :id
        ";

        $qry = $this->db->prepare($sql);

        $qry->bindValue(":produto", $produto->produto);
        $qry->bindValue(":precocusto", $produto->precocusto);        
        $qry->bindValue(":precovenda", $produto->precovenda);
        $qry->bindValue(":id", $produto->idproduto);  

        $qry->execute();
        return $produto->idproduto;
    }

    public function excluir($id){

        $sql = "DELETE FROM produto where idproduto = $id";

        $qry = $this->db->query($sql);
        

    }
}