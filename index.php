<?php
	require 'appConfig.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $PROJECT_NAME; ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="siteTitle" class="well well-sm">
			<h1><a href="."><?php echo $PROJECT_NAME; ?></a></h1>
		</div>

		<div class="container">
			<?php if(isset($_SESSION['LOGGED_IN_USER'])) require('navbar.php'); ?>

			<?php require('view.php'); ?>
		</div>

		<!-- jQuery -->
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>