 
	<!DOCTYPE html">
 
	<html">
 
	<head>
 
	<meta charset= "UTF-8"/>
 
	<title>Formul�rio de Contato</title>
 
	</head>
 
	<body>
 
	 
	<form action="email.php" method="post" enctype="multipart/form-data">
	<fieldset>
	<legend>Formulário de Contato</legend>
	<label>
	<span>Nome</span>
	<input type="text" name="nome" />
	</label>  <br>
	<label>
	<span>E-mail(remetente)</span>
	<input type="text" name="email" />
	</label><br>
	<label>
	<span>Titulo</span>
	<input type="text" name="titulo" />
	</label><br>
	<label>
	<span>Mensagem</span>
	<textarea name="mensagem" cols="30" rows="5"></textarea>
	</label>  <br>
	<label>
	<span>Arquivo (até 1MB)</span>
	<input type="file" name="arquivo" />
	</label>  <br>
	<input type="hidden" name="acao" value="enviar" />
	<input type="submit" value="Enviar Formulário" class="btn"/>
	</fieldset>
	</form>
	</body>
	</html>
