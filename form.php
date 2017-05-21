<script type="text/javascript">
    function verificarEmail() {
    document.write("<form name='formCadastrado' class='col-md-6' method='post' action='cadastrado.php'> <br> <div class='form-group'><input type='text' class='form-control' name='email' class='email' placeholder='E-mail' size=50/> <input type='submit' name='cadastrado' value='Enviar' class='pull-right btn btn-default'/> </div></form>")
    }
</script>
<script type="text/javascript">	
function verificarFormulario()
{   
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;

	if (nome!='' && email!=''){
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (re.test(email)==true){
			document.getElementById('Cadastrar').disabled = false;
		}
		else
			document.getElementById('Cadastrar').disabled = true;
	}
	else
		document.getElementById('Cadastrar').disabled = true;
}
</script>

<form name='formCadastro' class="col-md-6" method='post' action="cadastro.php">
	<div class="form-group"><input type='text' class="form-control" id='nome' name='nome' class='nome' placeholder='Nome completo' onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" id='email' name='email' class='email' placeholder='E-mail' onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='cargo' class='cargo' placeholder='Cargo (Opcional)' size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='empresa' class='empresa' placeholder='Empresa (Opcional)' size=50/></div>
	<div class="form-group"><input type="submit" id='Cadastrar' value="Cadastrar" disabled="true" class="pull-right btn btn-default"></div>
	<input type="button" name="cadastrado" value="Já sou cadastrado" class="pull-right btn btn-default" onclick="verificarEmail()" />
</form>