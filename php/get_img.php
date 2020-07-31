<?php 
	$server = "aniprog.org";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	$user = $_GET["login"];

	$sql = "SELECT url FROM images WHERE user=?";
	$query = $pdo -> prepare($sql);
	$query -> execute([$user]);
	$url = $query -> fetchAll()[0]["url"];
	echo $url;
?>