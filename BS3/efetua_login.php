<?php

include "funcoes/conecta_banco.php";


session_start();

// Recebe os dados do formulário
$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;
 

$query = " SELECT * FROM TBL_USER WHERE TBL_LOGIN = '".$login."' AND TBL_PWD = '".$senha." ' ";
$resulta = mysqli_query($db,$query);
//mysqli_free_result($resulta); //libera a consulta da memória
$total= mysqli_num_rows($resulta);
If($total > 0){
    header('Location: ../BS3/painel_admin.php');
    }else{
        echo 0;
        header('Location: ../BS3/admin.php');
    }
 

/* Fecha conexão */
mysqli_close($conn);




?>