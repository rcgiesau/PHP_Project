$(document).ready(function(){
        $('#cadastrar').click(function(){
        //buscando os dados do formulario
        //alert("Campos em branco");
            var nome = $("#name").val();
            var tel  = $("#fone").val();
            var cel  = $("#celu").val();
            var end  = $("#ende").val();
            var bai  = $("#bair").val();
                
                $.post('fInsereCliente.php', { nome : nome, telefone : tel, celular : cel, endereco : end, bairro : bai }, function (retorno){ 
                    if(retorno != null){
                        $('#res').val(retorno);
                        $(document).ready(function(){
                            demo.initChartist();
                            $.notify({
                                icon: 'pe-7s-gift',
                                message: "Cliente Cadastrado com Sucesso"
                            },{
                                type: 'info',
                                timer: 4000
                            });
                        });
                    } else {
                             $(document).ready(function(){
                                demo.initChartist();
                                $.notify({
                                    icon: 'pe-7s-gift',
                                    message: "Erro ao cadastrar cliente!"
                                },{
                                    type: 'info',
                                    timer: 4000
                                });
                             });       
                            }
                });
        });
    });