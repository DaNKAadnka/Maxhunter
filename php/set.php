<?php 
	$server = "aniprog.org";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	$name = $_GET["name"];
	$pass = $_GET["pass"];
	$sql = "SELECT * FROM logins WHERE user=?";
	$query = $pdo -> prepare ($sql);
	$query -> execute([$name]);
	
	$bool;
	$users = $query -> fetchAll();
	if (count($users)) {
		$bool = "Пользователь с таким именем уже существует";
	} else if (strlen($name) < 6) {
		$bool = "Имя должно содеражать как минимум 6 символов";
	} else if (strlen($pass) < 8) {
		$bool = "Пароль должен содержать как минимум 8 символов";
	} else {
		$bool = "true";
		$sql1 = "INSERT INTO logins (user, password) VALUES (?, ?)";
		$sql2 = "INSERT INTO more_info(login) VALUES (?)";
		$sql3 = "INSERT INTO images(user) VALUES(?)";
		$pss = md5($pass);
		$qq1 = $pdo -> prepare ($sql1);
		$qq1 -> execute ([$name, $pss]);
		$qq2 = $pdo -> prepare($sql2);
		$qq2 -> execute([$name]);
		$qq3 = $pdo -> prepare($sql3);
		$qq3 -> execute([$name]);
		setcookie("now_loged", $name);
	}
	echo $bool;
?>