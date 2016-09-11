<?php 

	$inserir = $modelo->create_register_form();
	
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
	
	if( $inserir ) :?>

	<script type="text/javascript">

		$(document).ready(function() {
			$('#myModal').modal('show');
		});
	
	</script>

	<input type="hidden" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" value="Visualizar">

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<a href="<?php echo HOME_URI; ?>/usuarios" class="close" >&times;</a>
				</div>
				<div class="modal-body">
					
				<?php 

					echo $modelo->form_msg;

					
				 ?>

				</div>
			</div> 
		</div>
	</div>

<?php 

	$modelo->form_msg = '';

	endif; 

	echo $modelo->form_msg;
	
 ?>