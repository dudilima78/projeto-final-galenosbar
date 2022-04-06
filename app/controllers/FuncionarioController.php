<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Funcionario;

class FuncionarioController extends Controller{
    
   public function index(){

        $objFuncionario = new Funcionario();
        $dados["lista"] = $objFuncionario->lista();
        $dados["view"] =  "Funcionario/index";

        //echo "<pre>";
        //print_r($dados);
        //exit;

        $this->load("template", $dados);
   }

   //Método apresenta o formulário
   public function create()
   {
      //Método faz uma chamada do arquivo create.php que está na pasta view
      $dados["view"] =  "Funcionario/Create";
      $this->load("template", $dados);
   }

   public function salvar()
   {
      //Criar um objeto de Funcionario do models
      $objFuncionario = new Funcionario();

      //Classe padrão stdClass que cria um array e atribui a um objeto
      $funcionario = new \stdClass();
      $funcionario->nome        = $_POST["nome"];
      $funcionario->cpf         = $_POST["cpf"];
      $funcionario->telefone    = $_POST["telefone"];
      $funcionario->dtadmissao  = $_POST["dtadmissao"];
      
      $funcionario->idfuncionario   = $_POST["idfuncionario"];

      if(!$funcionario->idfuncionario)
      {
         //Chamar o método inserir() que está no model Funcionario
         $objFuncionario->inserir($funcionario);
      }else{
         $objFuncionario->editar($funcionario);
      }
      
      header("location:".URL_BASE."funcionario");
   }

   public function edit($id)
   {
      $objFuncionario = new Funcionario();
      $dados["funcionario"] = $objFuncionario->getFuncionario($id);
      $dados["view"] =  "Funcionario/Create";
      //echo "<pre>";
      //print_r($dados);
      //exit;
      $this->load("template", $dados);
   }

   public function excluir($id)
   {
      $objFuncionario = new Funcionario();
      $objFuncionario->excluir($id);
      header("location:".URL_BASE."funcionario");
   }
}