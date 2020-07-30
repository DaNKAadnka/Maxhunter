<?php

	$server = "erel1.ru";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	//$sqll = "INSERT INTO logins (user, password) VALUES(?, ?)";
	//$stmt = $pdo -> prepare($sqll);
	//$stmt -> execute (["admin", "123321"]);
?>

