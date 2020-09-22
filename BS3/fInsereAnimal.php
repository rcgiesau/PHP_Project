<?php
//header('Content-type: application/json');
include "funcoes/conecta_banco.php";

$nome     = $_REQUEST['nome'];
$porte    = $_REQUEST['porte'];
$raca     = $_REQUEST['raca'];
$codcli   = $_REQUEST['codcli'];
//$mensagem = array que vai guardar a mensagem enviada via jason
$mensagem = array();

$sql = "INSERT INTO TBL_ANIMAL (TBL_CODCLI, TBL_NANIMAL, TBL_RACA, TBL_PORTE) 
VALUES ('$codcli', '$nome', '$raca', '$porte')";
if (mysqli_query($conn,$sql)){
   // $mensagem['erro'] = 1;
   // $mensagem['msg'] = "Dados inseridos com sucesso!";
   echo "Sucesso!!";
   // die(json_encode($mensagem));
} else {
        //$mensagem['erro'] = 2;
        //$mensagem['msg'] = "Erro na inclusão dos dados!";
        echo "Erro ao inserir animal";
        //die(json_encode($mensagem));
  }
mysqli_close($conn);

?>