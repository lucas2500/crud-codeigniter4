<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de produtos</title>
</head>
<body>

	<div class="container-fluid">

		<h1 class="text-center mt-4">Detalhes do  cadastro</h1>

		<?php echo form_open('home/UpdateUser');?>
		<div class="form-group">
			<input class="form-control" type="text" name="nome" id="nome" required="" placeholder="Nome completo" value="<?php echo $user['nome']; ?>">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" required="" placeholder="Email" value="<?php echo $user['email']; ?>">
		</div>
		<div class="form-group">
			<input type="endereceo" class="form-control" name="endereco" id="endereco" required="" placeholder="Endereço" value="<?php echo $user['endereco']; ?>">
		</div>

		<div class="form-group">
			<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>">
		</div>
		<button type="submit" class="btn btn-primary">Alterar</button>
		<?php echo form_close(); ?>
		
	</div>	
</body>
</html>