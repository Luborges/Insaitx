
<script type="text/javascript">
    function verificarEmail() {
    var email = prompt("Entre com o e-mail");
   	var sessao = "<?php echo json_encode ($_SESSION['cadastrado']);?>";


    $.ajax({
		type: "POST",
		url: "cadastrado.php",
		data: {email:email},
		complete: function (data) {
     	if (sessao==3){
			location.reload(); 
		}
     }
});

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
	var sessao = "<?php echo json_encode ($_SESSION['cadastrado']);?>";

	if (nome == "") {
	  alert("Digite o seu nome");
	}

	else if (email == ""){
	 alert("Digite o seu e-mail");
	}

	else if (!emailValido(email)){
	 alert("Digite o seu e-mail corretamente");
	}
	else{
		$.ajax({
			type: "POST",
			url: "cadastro.php",
			data: {nome:nome, email:email, cargo:cargo, empresa:empresa},
			complete: function (data) {
				if (sessao==3){
					location.reload(); 
				}
			}
		});
		alert("Muito obrigado! Te enviaremos um e-mail para te informar do cadastro!");
	}
}
</script>

<form name='formCadastro' class="col-md-12" method='post'>
	<div class="form-group"><input type='text' class="form-control" id='nome' name='nome' class='nome' placeholder='Nome completo' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" id='email' name='email' class='email' placeholder='E-mail' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='cargo' class='cargo' placeholder='Cargo (Opcional)' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='empresa' class='empresa' placeholder='Empresa (Opcional)' size=50/></div>
	<div class="form-group"><input type="button" id='Cadastrar' value="Cadastrar" class="pull-right btn btn-default mostra" onclick="verificarFormulario()"></div>
	<input type="button" name="cadastrado" value="Já sou cadastrado" class="pull-right btn btn-default realizado" onclick="verificarEmail()" />
</form>