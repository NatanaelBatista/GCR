<?php 

	$modelo->create_register_form();
	
 ?>

<form action="" method="post">
	<div class="row">
		<div class="form-group col-md-6">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" id="nome" name="user_name">	
		</div>
		<div class="form-group col-md-4">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="email" name="user">	
		</div>
		<div class="form-group col-md-2">	
			<label for="senha">Senha:</label>
			<input type="password" class="form-control" id="senha" name="user_password">	
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<button type="submit" class="btn btn-success btn-sm">Salvar</button>
			<button type="resert" class="btn btn-warning btn-sm">Limpar</button>
		</div>
	</div>
</form>

<?php 

	echo $modelo->form_msg;

 ?>