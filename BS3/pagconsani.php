<?php
//include com a conexão do banco
include "funcoes/conecta_banco.php";

//pegando o id do cliente passado via link
$codcli = $_GET['codcli'];

//executando o select na base para buscar os dados dos clientes e animais
$sql = "SELECT * FROM TBL_CLIENTE WHERE TBL_CODCLI = '".$codcli."' ";
$resulta = mysqli_query($db,$sql);
//mysqli_free_result($resulta); //libera a consulta da memória
$total= mysqli_num_rows($resulta);
If($total > 0){
while($f = mysqli_fetch_array($resulta)){
     $cliente          = $f['TBL_NCLI'];
     $telefone         = $f['TBL_TELCLI'];
     $celular          = $f['TBL_CELCLI'];
     $endereco         = $f['TBL_ENDCLI'];
     $bairro           = $f['TBL_BAIRRO'];
     
    }
}

?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Agendamento - AGROPETXV</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script type="text/javascript" src="js/mtel.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"    
    **************************************************************************************
    Div que monta o painel lateral com os acessos
    **************************************************************************************
    -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Agendamentos Banho e Tosa
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Banhos do dia</p>
                    </a>
                </li>
                <li class="">
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Agendamentos</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Ja Realizados</p>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <i class="pe-7s-note2"></i>
                        <p>Acesso Restrito</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <!--
    **************************************************************************************
    Div que monta o painel superior, com as opções de consulta e cadastramento
    **************************************************************************************
    -->
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Consulta de Cliente / Animal</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                           <a href="#"class="dropdown-toggle" data-toggle="dropdown">
                               <p>Consulta
                               <b class="caret"></b>
                               </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="pagconscli.php">Clientes</a></li>
                                <li><a href="#">Planos</a></li>
                                <li><a href="#">Agendamentos</a></li>

                              </ul>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Cadastros
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="pagcadcli.php">Clientes</a></li>
                                <li><a href="#">Planos</a></li>
                                <li><a href="#">Agendamentos</a></li>
                              </ul>
                        </li>
                        <li>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--
        ******************************************************************************
        Div que monta o cadastro/formulário
        ******************************************************************************
        -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">Consulta Cliente/Animal</h4>
                            </div>
                            <div class="content">
                                <div class="window" id="janela1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cliente</label>
                                                <label><?php echo $cliente; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefone Fixo</label>
                                                <label><?php echo $telefone; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <label><?php echo $celular; ?></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Endereco</label>
                                                <label><?php echo $endereco; ?></label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <label><?php echo $bairro; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                    </div>   
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Animal</label>
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Raça</label>
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Porte</label>
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    ******************************************************************
                                    Abaixo executa query para listar os animais vinculados ao cliente
                                    ******************************************************************
                                    -->                                 
                                    <?php
                                    $sql = "SELECT * FROM TBL_ANIMAL WHERE TBL_CODCLI = '".$codcli."' ";
                                    $resulta = mysqli_query($db,$sql);
                                    //mysqli_free_result($resulta); //libera a consulta da memória
                                    $total= mysqli_num_rows($resulta);
                                    If($total > 0){
                                        $counter=0;
                                        $numero = $counter + $total; //numero de linhas
                                        while($counter < $numero){ //faz a contagem dos resultados para obter as linhas da consulta     
                                            while($f = mysqli_fetch_array($resulta)){
                                                $nanimal  = $f['TBL_NANIMAL'];
                                                $raca     = $f['TBL_RACA'];
                                                $porte    = $f['TBL_PORTE'];
                                    ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><?php echo $nanimal; ?></label>
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><?php echo $raca; ?></label>
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><?php echo $porte; ?></label>
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                   //a cada linha a variável contadora recebe +1
                                    $counter++;
                                            }
                                        }
                                    }
                                    ?> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" id="escolha" onclick="exibe('cadastro');">
                                                        <span class="form-check-sign"></span>
                                                        Deseja cadastrar um animal?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                <!-- Div criada para controlar a exibição dos campos-->
                                    <div id="cadastro" style="display:none">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Para cadastrar um animal, insira os dados abaixo.</label>
                                                <label></label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome do Animal</label>
                                                <input type="text" class="form-control"  placeholder="Nome do animal" name="name" id="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group">
                                                <label>Porte</label>
                                                <input type="text" class="form-control"  placeholder="Porte" name="porte" id="porte">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group">
                                                <label>Raca</label>
                                                <input type="text" class="form-control"  placeholder="Raca do animal" name="raca" id="raca">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control"  placeholder="Raca do animal" name="codcli" id="codcli" value="<?php echo $codcli; ?>">
                                    <button id="cadastrar" class="btn btn-info btn-fill pull-right">Cadastrar</button>  
                                    <P></P>    
                                    </div>                             
                                <!-- Fim da div criada para exibição dos campos de cadastro-->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                    
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">AgroXV</a>, Agendamento banho e tosa
                </p>
            </div>
        </footer>
    </div>
</div>



</body>

    <!--   Core JS Files   -->
   <!-- <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>-->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    <!-- Ajax para envio do cadastro de cliente -->
    <script type="text/javascript" src="js/jAjaxInsereAnimal.js"></script>

    <!-- Ajax para validação dos campos do cadastro -->
    <script type="text/javascript" src="js/validacao.js"></script>
    <script>
    function exibe(id) {  
        if(document.getElementById(id).style.display=="none") {  
            document.getElementById(id).style.display = "inline";  
        }    
        else {  
            document.getElementById(id).style.display = "none";  
        }     
    }
    </script>
    
   


</html>
