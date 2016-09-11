<!DOCTYPE html>
<html lang="en">
	<head>

		<title><?php echo $this->title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
	        
	        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
	        .row.content {height: 550px}
	        
	        /* Set gray background color and 100% height */
	        .sidenav {
	          background-color: #f1f1f1;
	          height: 100%;
	        }
	            
	        /* On small screens, set height to 'auto' for the grid */
	        @media screen and (max-width: 767px) {
	          .row.content {height: auto;}
	        }

	        .navbar {
	        	margin-bottom: 0;
	        	border-radius: 0;
	        }

	        a.in-button {
				text-decoration: none;
				color: #fff;
			}

		</style>

		<script type="text/javascript">

			$(document).ready(function() {
				$('#myModal').modal('show');
			});
		
		</script>

	</head>
	<body>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>
			</div>
		</nav>

		<input type="hidden" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			 
			 <!-- Modal content-->
			 <div class="modal-content">

				<div class="modal-header">
					 <h2 class="modal-title">Nome do sistema</h2>
				</div>
				<div class="modal-body">
					 <div class="row">
						<div class="form-group col-md-10">
							<label for="email">Email:</label>
							<input type="text" class="form-control" id="email" name="user">	
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-10">	
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="senha" name="user_password">	
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-10">
							<button type="submit" class="btn btn-success">Login</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<p style="text-align:center;">Copyright &copy; 2016 - by <a href="">Natanael Batista</a></p>
				</div>
			</div>
		 </div>
		 
	</body>
</html>