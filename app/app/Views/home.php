<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de produtos</title>
</head>
<body>

	<h1>Cadastro de usuários</h1>

	<?php echo form_open('home/insert');?>
		<input type="text" name="nome" id="nome" required="">
		<input type="email" name="email" id="email" required="">
		<input type="endereceo" name="endereco" id="endereco" required="">
		<button type="submit">Enviar</button>
	</form>

</body>
</html>