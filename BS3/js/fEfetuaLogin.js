$(document).ready(function(){
        $('#acessar').click(function(){
        //buscando os dados do formulario
        //alert("Campos em branco");
            var login   = $("#login").val();
            var senha   = $("#Senha").val();
                 
                $.post('efetua_login.php', { login : login, senha : senha}, function (retorno){ 
                    if(retorno != null){
                        $('#res').val(retorno);
                        $(document).ready(function(){
                          /*  demo.initChartist();
                            $.notify({
                                icon: 'pe-7s-gift',
                                message: "Login realizado com sucesso!!"
                            },{
                                type: 'info',
                                timer: 4000
                            });
                        */
                        window.location.href = "painel_admin.php";
                      
                        });
                    } else {
                             $(document).ready(function(){
                                demo.initChartist();
                                $.notify({
                                    icon: 'pe-7s-gift',
                                    message: "Erro ao efetuar login, verifique o usuário ou senha!"
                                },{
                                    type: 'info',
                                    timer: 4000
                                });
                             });       
                            }
                });
        });
    });