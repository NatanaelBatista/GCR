					
						<div class="row">
							<div class="form-group col-md-4">
								<h3 style="margin-top:4px;">Usuários</h3>
							</div>
							<div class="form-group col-md-5">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
							<div class="form-group col-md-3">
								<a class="btn btn-success btn-sm" href="<?php echo HOME_URI;?>/usuarios/inserir">Novo</a>
							<div>
						</div>
					</div>
					<?php 

						// Lista os usuários
						$lista = $modelo->get_user_list();

					?>
					<div class="row">
						<div class="form-group col-md-12">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th></th>
										<th>Nome</th>
										<th>Usuário</th>
										<th>Senha</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($lista as $fetch_userdata): ?>

									<tr>
										<td><?php echo $fetch_userdata['user_id'] ?></td>
										<td><?php echo $fetch_userdata['user_name'] ?></td>
										<td><?php echo $fetch_userdata['user'] ?></td>
										<td><?php echo $fetch_userdata['user_password'] ?></td>
										<td>

											<?php if( $_SERVER['REQUEST_URI'] != '/system/usuarios' ):?>

											<script type="text/javascript">
												$(document).ready(function() {
												   $('#myModal').modal('show');
												});
											</script>
											
											<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
												Visualizar
											</button>

											<?php endif; ?>

											<?php if( $_SERVER['REQUEST_URI'] == '/system/usuarios'): ?>

											<a href="<?php echo HOME_URI; ?>/usuarios/visualizar/<?php echo $fetch_userdata['user_id'] ?>" class="btn btn-primary btn-xs">
												Visualizar
											</a>

											<?php endif; ?>

											<a href="<?php echo HOME_URI; ?>/usuarios/editar" class="btn btn-warning btn-xs">
												Editar
											</a>
										</td>
									</tr>

								<?php endforeach; ?>

								</tbody>
							</table>
						<div>
					</div>
					<div class="container">
						<ul class="pagination">
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
					</div>