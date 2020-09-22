$(document).ready(function(){
    $("#cadastrar").click(function(){
        //buscando os dados do formulario
        var nome = $("#nome").val();
        var tel  = $("#telefone").val();
        var cel  = $("#celular").val();
        var end  = $("#endereco").val();
        //verificando os campos em branco
          /*  if(nome == ""){// || tel == "" || cel == "" || end==""){
                
                alert("Campos em branco");
            
            } 
            else{*/
                $.post('fInsereCliente.php',{nome : nome, telefone : tel, celular : cel, endereco : end }, function(retorno){
                    
                    if(retorno != NULL){
                        $("#res").val(retorno);
                    }else{
                         Alert("Erro na inserção do cliente");
                    }
                    
                });
               /* $.ajax({
                    url: 'fInsereCliente.php',
                    data: {nome : nome, tel : telefone, cel : celular, end : endereco},
                    type: 'POST',
                    datatype: 'json',
                    success: function(data){
                        if(retorno.erro == 1){
                            alert(retorno.msg);
                        }else{
                            alert(retorno.msg);
                        }
                        
                    },
                    error: function(){
                        alert("houve um erro no jquery");
                        
                    } 
                    
                });*/
           // }
           // return false;
  
    )};

)};