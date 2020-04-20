<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de produtos</title>
</head>
<body>

	<div class="container-fluid">

		<h1 class="text-center mt-4">Cadastro de usuários</h1>

		<?php echo form_open('home/insert');?>
		<div class="form-group">
			<input class="form-control" type="text" name="nome" id="nome" required="" placeholder="Nome completo">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" required="" placeholder="Email">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="endereco" id="endereco" required="" placeholder="Endereço">
		</div>
		<button type="submit" class="btn btn-success">Enviar</button>
		<?php echo form_close(); ?>

		<hr />

		<table class="table table-bordered text-center">
			
			<thead>
				<tr>
					<th>Nome</th>
					<th>ID</th>
					<th>Mais detalhes</th>
				</tr>
			</thead>

			<tbody>
				<?php 

					foreach($users as $usuario){

						echo "<tr>";
						echo "<td>".$usuario['nome']."</td>";
						echo "<td>".$usuario['id']."</td>";
						echo "<td><a href='".base_url()."/home/CheckUser/".$usuario['id']."' target='_blank'><button class='btn btn-info'>Detalhes</button></a></td>";
						echo "<td><a href='".base_url()."/home/DeleteUser/".$usuario['id']."'><button class='btn btn-danger'>Excluir</button></a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>