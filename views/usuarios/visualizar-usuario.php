	<?php 

		$modelo->get_register_form( chk_array( $parametros, 0 ) );

	 ?>

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<a href="<?php echo HOME_URI; ?>/usuarios" class="close" >&times;</a>
					<h4 class="modal-title">Usuário</h4>
				</div>
				<div class="modal-body">
					<table>
						<tr>
							<td>ID:</td>
							<td><?php echo chk_array( $modelo->form_data, 'user_id' ); ?></td>
						</tr>
						<tr>
							<td>Nome:</td>
							<td><?php echo chk_array( $modelo->form_data, 'user_name' ); ?></td>
						</tr>
						<tr>
							<td>Login:</td>
							<td><?php echo chk_array( $modelo->form_data, 'user' ); ?></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><?php echo chk_array( $modelo->form_data, 'user_password' ); ?></td>
						</tr>
					</table>
				</div>
			</div> 
		</div>
	</div>