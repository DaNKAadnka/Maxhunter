<?php
	$server = "aniprog.org";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);
	

	$name = $_GET["name"];
	$pass = $_GET["pass"];
	$pss = md5($pass);
	$sql = "SELECT * FROM logins WHERE user=? && password=?";
	$query = $pdo -> prepare ($sql);
	$query -> execute([$name, $pss]);
	
	$bool;
	$users = $query -> fetchAll();
	if (count($users)) {
		$bool = "true";
		setcookie("now_loged", $name);
	} else {
		$bool = "false";
	}
	echo $bool;
?>