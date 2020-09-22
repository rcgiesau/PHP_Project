<?php
//header('Content-type: application/json');
include "funcoes/conecta_banco.php";

$nome     = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];
$celular  = $_REQUEST['celular'];
$endereco = $_REQUEST['endereco'];
$bairro   = $_REQUEST['bairro'];
//$mensagem = array que vai guardar a mensagem enviada via jason
$mensagem = array();

$sql = "INSERT INTO TBL_CLIENTE (TBL_NCLI, TBL_TELCLI, TBL_CELCLI, TBL_ENDCLI, TBL_BAIRRO) 
VALUES ('$nome', '$telefone', '$celular', '$endereco', '$bairro')";
if (mysqli_query($conn,$sql)){
   // $mensagem['erro'] = 1;
   // $mensagem['msg'] = "Dados inseridos com sucesso!";
   echo "Sucesso!!";
   // die(json_encode($mensagem));
} else {
        //$mensagem['erro'] = 2;
        //$mensagem['msg'] = "Erro na inclusão dos dados!";
        echo "Erro ao inserir cliente";
        //die(json_encode($mensagem));
  }
mysqli_close($conn);

?>