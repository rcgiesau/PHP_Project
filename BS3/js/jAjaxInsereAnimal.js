$(document).ready(function(){
        $('#cadastrar').click(function(){
        //buscando os dados do formulario
        //alert("Campos em branco");
            var nome   = $("#name").val();
            var port   = $("#porte").val();
            var raca   = $("#raca").val();
            var codcli = $("#codcli").val();
                
                $.post('fInsereAnimal.php', { nome : nome, porte : port, raca : raca, codcli : codcli}, function (retorno){ 
                    if(retorno != null){
                        $('#res').val(retorno);
                        $(document).ready(function(){
                            demo.initChartist();
                            $.notify({
                                icon: 'pe-7s-gift',
                                message: "Animal inserido com sucesso!"
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
                                    message: "Erro ao inserir o animal!"
                                },{
                                    type: 'info',
                                    timer: 4000
                                });
                             });       
                            }
                });
        });
    });