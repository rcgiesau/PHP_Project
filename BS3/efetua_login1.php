<?php
header('Content-Type: application/json; charset=utf-8');
session_start();
 
include "funcoes/conecta_banco.php";
 
 
// Dica 1 - Verifica se a origem da requisição é do mesmo domínio da aplicação
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "http://localhost/sistema/bs3/admin.php"):
	$retorno = array('codigo' => '', 'mensagem' => 'Origem da requisição não autorizada!');
	echo json_encode($retorno);
	exit();
endif;
 
 
// Instancia Conexão PDO

 
// Recebe os dados do formulário
$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;
 
 
// Dica 2 - Validações de preenchimento e-mail e senha se foi preenchido o e-mail
if (empty($login)):
	$retorno = array('codigo' =>'' , 'mensagem' => 'Preencha seu login');
	echo json_encode($retorno);
	exit();
endif;
 
if (empty($senha)):
	$retorno = array('codigo' =>'' , 'mensagem' => 'Preencha sua senha!');
	echo json_encode($retorno);
	exit();
endif;
 

 
// Dica 5 - Válida os dados do usuário com o banco de dados
$query = " SELECT * FROM TBL_USER WHERE TBL_LOGIN = '".$login."' AND TBL_PWD = '".$senha." ' ";
$resulta = mysqli_query($db,$query);
//mysqli_free_result($resulta); //libera a consulta da memória
$total= mysqli_num_rows($resulta);
If ($total > 0){
	$_SESSION['logado'] = 'SIM';
}
else{
	$_SESSION['logado'] = 'NAO';
}
 	
// Se logado envia código 1, senão retorna mensagem de erro para o login
if ($_SESSION['logado'] == 'SIM'){
	$retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($retorno);
	

	}else{
		$retorno = array('codigo' => '0', 'mensagem' => 'Usuário não autorizado');
		echo json_encode($retorno);
		
	}
