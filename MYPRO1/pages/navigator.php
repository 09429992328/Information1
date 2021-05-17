<?Php

include("styles.php");




?>


<html>
	<head>
		<title>
			CRUD
		</title>
		<!--<link href="../bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="../bootstrap/bootstrap/js/bootstrap.js"></script>
        <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>-->
	</head>
	<style type="text/css">
	.container{
  		margin-top: 10px;
    	width:500px;
	}
	.img{
    	float:right;
    	padding-left:20px;
    	margin-top:20px;
	}
	td{
		padding: 2px;
	}
	label{
		color: pink;
		font-weight: normal;
	}
	.padtop{
		padding-top: 10px;
	}
	.card-header{
		text-align: left;
	}
	.card-body{
		margin-top: 20px;
		margin-bottom: 20px;
	}
	</style>
	
		<body>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-gray border-bottom box-shadow">
      		<h5 class="my-0 mr-md-auto font-weight-normal">MySite</h5>
      		<nav class="my-2 my-md-0 mr-md-3">
        	<a class="p-2 text-dark" href="../index.php">Home</a>
			<a class="btn btn-outline-primary" href="../pages/login.php">Login</a>
      		</nav>
			</div>
			<form method="post" action="../process/registerprocess.php">
			<div class="container">

            
				<div class="header">
                        <?php 
						if(isset($_SESSION["registration_error_msg"])){
							echo '<div class="alert alert-danger" role="alert">';
							echo $_SESSION["registration_error_msg"];
							echo '</div>';
							}
						echo'<br>';
						if(isset($_SESSION["exist_error_msg"])){
							echo '<div class="alert alert-danger" role="alert">';
							echo $_SESSION["exist_error_msg"];
							echo '</div>';
							}
						?>

					<br/>
					</div>

					</form>
				</div>
		</body>
</html>
