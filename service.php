<?php
function login($username, $password){
	$_SESSION['LOGGED_IN_USER'] = $username;
	header("Location: .");
}

function logOut(){
	session_unset();
	header("Location: .");
	die();
}

function getPdo(){
	$pdo = new PDO('mysql:host=localhost;dbname=project', 'root', '');
}

function selectQuery($query){
	$connection = mysqli_connect('localhost', 'root', '', 'project') or die('Cannot connect to database');
	$resource = mysqli_query($connection, $query);

	$result = [];
	if($resource) {
		while($row = mysqli_fetch_assoc($resource)) {
			array_push($result, $row);	
		}
	}

	return $result;
}