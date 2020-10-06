
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
    <style type="text/css">
        #login-alert{
        display: none;
    }
   </style>
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
                    <a class="navbar-brand" href="#">Acesso Restrito </a>
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
                                <li><a href="#">Clientes</a></li>
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
                            <h4 class="title">Login : Acesso restrito</h4>
                            </div>
                            
                                <div class="mensagem-erro"></div>
                                <form id="login-form" class="form-horizontal" role="form" action="efetua_login.php" method="post">
                            <div class="content">
                             
                                <div class="window" id="janela1">
                                    <div class="row">
                                    
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input type="text" class="form-control"  placeholder="Login" name="login" id="login">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control"  placeholder="Senha (até 6 caracteres)" name="senha" id="senha">
                                            </div>
                                        </div>
                                    </div>      
                                    <button id="acessar" class="btn btn-info btn-fill pull-right">Acessar</button>  
                                    </form>
                                    <P></P>                                 
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
    <script type="text/javascript" src="js/fEfetuaLogin.js"></script>

    <!-- Ajax para validação dos campos do cadastro -->
    <script type="text/javascript" src="js/validacao.js"></script>
    
   


</html>
