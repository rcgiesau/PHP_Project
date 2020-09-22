$('document').ready(function(){
 
	$("#acessar").click(function(
		
		$.ajax({
			type : 'POST',
			url  : 'efetua_login1.php',
			data : $(".form").serialize(),
			success :  function(data){						
				if(response.codigo == "1"){	
					$("#acessar").html('Entrar');
					$("#login-alert").css('display', 'none')
					window.location.href = "painel_admin.php";
				}
				else{			
					$("#acessar").html('Entrar');
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
				}
		    }
		});
	});
 
});