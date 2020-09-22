<?php
include "funcoes/conecta_banco.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Agendamentos AgroPetXV</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'/>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Agendamento Banho e Tosa
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Banhos do Dia</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Clientes</a>
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
                                <!--<li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>-->
                              </ul>
                        </li>
                        <li>
                           <!-- <a href="#">
                                <p>Log out</p>
                            </a>-->
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Consulta de Clientes/Animais</h4>
                                <p class="category">Clique no cliente para visualizar todos os seus dados e os dados de seus animais..</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>Nome</th>
                                    	<th>Telefone</th>
                                    	<th>Celular</th>
                                    </thead>
                                    <?php
                                    //consultando os regitros dos clientes.
                                    $sql = "SELECT * FROM TBL_CLIENTE";
                                    $resulta=mysqli_query($db,$sql);
                                    $total= mysqli_num_rows($resulta);
                                    if($total > 0){ 
                                        $counter=0;
                                        $numero = $counter + $total; //numero de linhas
                                        while($counter < $numero) //faz a contagem dos resultados para obter as linhas da consulta
                                            {
                                                while($f = mysqli_fetch_array($resulta)){
                                                $id       = $f['TBL_CODCLI'];
                                                $nome     = $f['TBL_NCLI'];
                                                $telefone = $f['TBL_TELCLI'];
                                                $celular  = $f['TBL_CELCLI'];
                                                $endereco = $f['TBL_ENDCLI'];
                                    ?>
                                    <tbody>
                                        <tr>
                                        	<td><a href="pagconsani.php?codcli=<?php echo $id ?>" rel="modal" id="janela1" ><?php echo $nome;?></td>
                                        	<td><?php echo $telefone;?></td>
                                        	<td><?php echo $celular;?></td>
                                        </tr>
 
                                    </tbody>
                                    <?php
                                    //a cada linha a variável contadora recebe +1
                                    $counter++;
                                            }
                                        }
                                    }
                                    ?>
                                </table>
                                <div class="window" id="janela1">
                                    <a href="#" class="fechar">X Fechar</a>
                                    <h4>Clientes</h4>
                                    <form id="cadUsuario" action="" method="post">
                                        <label>Nome:</label><input type="text" name="nome" id="nome" />
                                        <label>Email:</label><input type="text" name="email" id="email" />
                                        <label>Senha:</label> <input type="text" name="senha" id="senha" />
                                        <br/><br/>
                                    </form>
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
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
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
    <script src="assets/js/modal.js"></script>


</html>
