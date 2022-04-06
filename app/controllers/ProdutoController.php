<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

class ProdutoController extends Controller{
    
   public function index(){

        $objProduto = new Produto();
        $dados["lista"] = $objProduto->lista();
        $dados["view"] =  "Produto/index";

        //echo "<pre>";
        //print_r($dados);
        //exit;

        $this->load("template", $dados);
   }

   //Método apresenta o formulário
   public function create()
   {
      //Método faz uma chamada do arquivo create.php que está na pasta view
      $dados["view"] =  "Produto/Create";
      $this->load("template", $dados);
   }

   public function salvar()
   {
      //Criar um objeto de Produto do models
      $objProduto = new Produto();

      //Classe padrão stdClass que cria um array e atribui a um objeto
      $produto = new \stdClass();
      $produto->produto        = $_POST["produto"];
      $produto->precocusto     = $_POST["precocusto"];
      $produto->precovenda     = $_POST["precovenda"];
           
      $produto->idproduto   = $_POST["idproduto"];

      if(!$produto->idproduto)
      {
         //Chamar o método inserir() que está no model Produto
         $objProduto->inserir($produto);
      }else{
         $objProduto->editar($produto);
      }
      
      header("location:".URL_BASE."produto");
   }

   public function edit($id)
   {
      $objProduto = new Produto();
      $dados["produto"] = $objProduto->getProduto($id);
      $dados["view"] =  "Produto/Create";
      //echo "<pre>";
      //print_r($dados);
      //exit;
      $this->load("template", $dados);
   }

   public function excluir($id)
   {
      $objProduto = new Produto();
      $objProduto->excluir($id);
      header("location:".URL_BASE."produto");
   }
}