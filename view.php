<?php
if(!isset($_SESSION['LOGGED_IN_USER'])){
	require 'login.php';
} else{
	$view = 'home.php';
	
	if (isset($_GET['p'])) {
		switch ($_GET['p']) {
			case 'logout':
				$view = 'logout.php';
			break;
			case 'profile':
				$view = 'profile.php';
			break;
			
			default:
			$view = 'home.php';
			break;
		}
	}

	require 'views/' . $view;
}