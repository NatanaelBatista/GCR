<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $this->title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--
		<link rel="stylesheet" href="views/_css/bootstrap.min.css">
		<script src="views/_js/bootstrap.min.js"></script>
		<script src="views/_js/jquery.min.js"></script>
		-->
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
	        	idth: 100%;
	        	-index: 1;
	        }

	        a.in-button {
				text-decoration: none;
				color: #fff;
			}
		</style>
	</head>
	<body>