<?php

include "funcoes/conecta_banco.php";


session_start();

// Recebe os dados do formulário
/*$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;
 

$query = " SELECT * FROM TBL_USER WHERE TBL_LOGIN = '".$login."' AND TBL_PWD = '".$senha." ' ";
$resulta = mysqli_query($db,$query);
//mysqli_free_result($resultac); //libera a consulta da memória
$total= mysqli_num_rows($resulta);
If($total > 0){
	
        echo 1;
    }else{
        echo 0;
    }
 

/* Fecha conexão 
mysqli_close($conn);
*/
$login = $_POST['login'];
$senha = $_POST['senha'];


$query = " SELECT * FROM TBL_USER WHERE TBL_LOGIN = '" . $login . "' AND TBL_PWD = '" . $senha . " ' ";
$resulta = mysqli_query($db, $query);
$totalres = mysqli_num_rows($resulta);

if ($totalres == 1) {
?>
    <script>
        function newDoc() {
            window.location.href = "painel_admin.php";
        }
    </script>
<?php
} else {
    echo "errou";
}


?>