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
	document.getElementById('arquivo').value=arquivo;

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

<script>
var query = location.search.substring(1);
var arquivo = query.substring(8,query.length);
</script>

<h1> Cadastre-se para baixar o ebook</h1>
<form name='formCadastro' class="col-md-12" method='post' action='cadastro.php'>
	<div class="form-group"><input type='text' class="form-control" id='nome' name='nome' class='nome' placeholder='Nome completo' onclick="verificarFormulario()" onkeyup="verificarFormulario()"size=50/></div>
	<div class="form-group"><input type='text' class="form-control" id='email' name='email' class='email' placeholder='E-mail' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='cargo' class='cargo' placeholder='Cargo (Opcional)' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='empresa' class='empresa' placeholder='Empresa (Opcional)' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type="hidden" id='arquivo' class="arquivo" name='arquivo' class='arquivo'/></div>
	<div class="form-group"><input type="submit" id='Cadastrar' disabled="true" value="Cadastrar" class="pull-right btn btn-default mostra" ></div>
</form>