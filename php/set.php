<?php 
	include_once "conDB.php";

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
		$bool = "Пароль должен содеражать как минимум 8 символов";
	} else {
		$bool = "true";
		$sqll = "INSERT INTO logins (user, password) VALUES (?, ?)";
		$qq = $pdo -> prepare ($sqll);
		$qq -> execute ([$name, $pass]);
		setcookie("now_loged", $name);
	}
	echo $bool;
?>