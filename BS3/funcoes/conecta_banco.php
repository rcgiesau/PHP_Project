<?php

//passando os parametros de acesso ao banco
$host   = "localhost";
$banco  = "sistema";
$user   = "root";
$pwd    = "";
$db = mysqli_connect("$host","$user","$pwd")or die("Erro ao se conectar no banco de dados");
mysqli_select_db($db, $banco)or die(mysqli_connect_error());

//efetuando a conexão com o banco
$conn = mysqli_connect($host,$user,$pwd,$banco);

if(!$conn){

    die("Erro de conexão com o banco: ". mysqli_connect_error());
}
//echo ("Sucesso na conexão com o banco ". $banco);




?>