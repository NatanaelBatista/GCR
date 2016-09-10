<?php 

	$modelo->validate_register_form();
	
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
	<!--
	<div class="row">
		<div class="form-group col-md-2">	
			<label for="rg">RG:</label>
			<input type="text" class="form-control" id="rg" name="rg">	
		</div>
		<div class="form-group col-md-2">	
			<label for="cpf">CPF:</label>
			<input type="text" class="form-control" id="cpf" name="cpf">	
		</div>
		<div class="form-group col-md-2">	
			<label for="telefone">Telefone:</label>
			<input type="text" class="form-control" id="telefone" name="telefone">	
		</div>
		<div class="form-group col-md-2">	
			<label for="celular">Celular:</label>
			<input type="text" class="form-control" id="celular" name="celular">	
		</div>
		<div class="form-group col-md-4">	
			<label for="endereco">Endereço:</label>
			<input type="text" class="form-control" id="endereco" name="endereco">	
		</div>
	</div>
	-->
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