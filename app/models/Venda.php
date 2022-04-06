<?php

namespace app\models;
use app\core\Model;

class Venda extends Model{
    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM venda";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
        
    }

    //Método responsável por inserir dados no bd
    public function inserir($venda){
        //$dtvenda = $_POST["dtvenda"];
        //INSERT INTO venda (dtvenda,idade) values ('$dtvenda','$idade');

        $sql = "INSERT INTO venda SET
            dtvenda        =:dtvenda,
            idproduto         =:idproduto,
            idfuncionario    =:idfuncionario,
            qtd  =:qtd           
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":dtvenda", $venda->dtvenda);
        $qry->bindValue(":idproduto", $venda->idproduto);        
        $qry->bindValue(":idfuncionario", $venda->idfuncionario);        
        $qry->bindValue(":qtd", $venda->qtd);
        

        $qry->execute();

        return $this->db->lastInsertId();


    }

    public function getVenda($id)
    {
        $sql = "SELECT * FROM venda WHERE idvenda = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($venda)
    {
       
        $sql = "UPDATE venda SET
            dtvenda        =:dtvenda,
            idproduto         =:idproduto,            
            idfuncionario    =:idfuncionario,            
            qtd  =:qtd
            
            WHERE idvenda = :id
        ";

        $qry = $this->db->prepare($sql);

        $qry->bindValue(":dtvenda", $venda->dtvenda);
        $qry->bindValue(":idproduto", $venda->idproduto);        
        $qry->bindValue(":idfuncionario", $venda->idfuncionario);        
        $qry->bindValue(":qtd", $venda->qtd);
        $qry->bindValue(":id", $venda->idvenda);  

        $qry->execute();
        return $venda->idvenda;
    }

    public function excluir($id){

        $sql = "DELETE FROM venda where idvenda = $id";

        $qry = $this->db->query($sql);
        

    }
}