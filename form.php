<script src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    function verificarEmail() {
    document.write("<form name='formCadastrado' class='col-md-6' method='post' action='cadastrado.php'> <br> <div class='form-group'><input type='text' class='form-control' name='email' class='email' placeholder='E-mail' size=50/> <input type='submit' name='cadastrado' value='Enviar' class='pull-right btn btn-default'/> </div></form>")
    }
</script>
<script type="text/javascript">	
function emailValido(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (re.test(email)==true){
    		return true;
    	}
}

function verificarFormulario(){
	var nome = $('#nome').val();
	var email = $('#email').val();
	var cargo = $('#cargo').val();
	var empresa = $('#empresa').val();

	if (nome == "") {
	  bootbox.alert("Digite o seu nome");
	}

	else if (email == ""){
	  bootbox.alert("Digite o seu e-mail");
	}

	else if (!emailValido(email)){
	  bootbox.alert("Digite o seu e-mail corretamente");
	}
	else{

		$.ajax({
				type: "POST",
				url: "cadastro.php",
				data: {nome:nome, email:email, cargo:cargo, empresa:empresa},
				success: function(resposta){
					alert(resposta);
					$("#nome").val('');
	                $("#email").val('');
	                $("#cargo").val('');
	                $("#empresa").val('');
			}
		});
		 bootbox.alert("Cadastrado");
	}
}
</script>


<form name='formCadastro' class="col-md-6" method='post'>
	<div class="form-group"><input type='text' class="form-control" id='nome' name='nome' class='nome' placeholder='Nome completo' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" id='email' name='email' class='email' placeholder='E-mail' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='cargo' class='cargo' placeholder='Cargo (Opcional)' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='empresa' class='empresa' placeholder='Empresa (Opcional)' size=50/></div>
	<div class="form-group"><input type="button" id='Cadastrar' value="Cadastrar" class="pull-right btn btn-default mostra" onclick="verificarFormulario()"></div>
	<input type="button" name="cadastrado" value="Já sou cadastrado" class="pull-right btn btn-default" onclick="verificarEmail()" />
</form>