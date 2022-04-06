<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Venda;

class VendaController extends Controller{
    
   public function index(){

        $objVenda = new Venda();
        $dados["lista"] = $objVenda->lista();
        $dados["view"] =  "Venda/index";

        //echo "<pre>";
        //print_r($dados);
        //exit;

        $this->load("template", $dados);
   }

   //Método apresenta o formulário
   public function create()
   {
      //Método faz uma chamada do arquivo create.php que está na pasta view
      $dados["view"] =  "Venda/Create";
      $this->load("template", $dados);
   }

   public function salvar()
   {
      //Criar um objeto de Venda do models
      $objVenda = new Venda();

      //Classe padrão stdClass que cria um array e atribui a um objeto
      $venda = new \stdClass();
      $venda->dtvenda        = $_POST["dtvenda"];
      $venda->idproduto         = $_POST["idproduto"];
      $venda->idfuncionario    = $_POST["idfuncionario"];
      $venda->qtd  = $_POST["qtd"];
      
      $venda->idvenda   = $_POST["idvenda"];

      if(!$venda->idvenda)
      {
         //Chamar o método inserir() que está no model Venda
         $objVenda->inserir($venda);
      }else{
         $objVenda->editar($venda);
      }
      
      header("location:".URL_BASE."venda");
   }

   public function edit($id)
   {
      $objVenda = new Venda();
      $dados["venda"] = $objVenda->getVenda($id);
      $dados["view"] =  "Venda/Create";
      //echo "<pre>";
      //print_r($dados);
      //exit;
      $this->load("template", $dados);
   }

   public function excluir($id)
   {
      $objVenda = new Venda();
      $objVenda->excluir($id);
      header("location:".URL_BASE."venda");
   }
}