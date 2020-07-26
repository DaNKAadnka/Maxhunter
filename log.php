<?php 
	include_once "conDB.php";

	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$sql = "SELECT * FROM logins WHERE user=? && password=?";
	$query = $pdo -> prepare ($sql);
	$query -> execute([$name, $pass]);
	
	$bool;
	$users = $query -> fetchAll();
	if (count($users)) {
		$bool = true;
		echo $bool;
		exit();
	} else {
		$bool = false;
		echo $bool;
		exit();
	}
?>