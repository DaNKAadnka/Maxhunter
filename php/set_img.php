<?php 
	$server = "aniprog.org/person.php";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	$url = $_POST["url"];
	$login = $_POST["login"];

	echo "$login - $url";
	
	$sql = "UPDATE images SET url=:url WHERE user=:user";
	$query = $pdo -> prepare($sql);
	$query -> execute(array ("url" => $url, "user" => $login));
?>