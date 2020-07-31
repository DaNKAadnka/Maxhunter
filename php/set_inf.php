<?php 
	$server = "aniprog.org/person.php";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	$info = array ("email", "name", "surname", "city", "country", "job", "gender");
	$upd_i = array ();
	$upd_i["login"] = $_POST["login"];
	$upd_i["email"] = $_POST["email"];
	$upd_i["name"] = $_POST["name"];
	$upd_i["surname"] = $_POST["surname"];
	$upd_i["city"] = $_POST["city"];
	$upd_i["country"] = $_POST["country"];
	$upd_i["job"] = $_POST["job"];
	$upd_i["gender"] = $_POST["gender"];

	$sql = "SELECT * FROM more_info WHERE login=?";
	$query = $pdo -> prepare ($sql);
	$query -> execute([$upd_i["login"]]);
	$users = $query -> fetchAll();
	if (!count($users)) {
		$sqll = "INSERT INTO more_info (login) VALUES (?)";
		$qq = $pdo -> prepare($sqll);
		$qq -> execute(array ($upd_i["login"]));
		foreach ($info as $i) {
			if ($upd_i[$i] != "") {
				$sqll = "UPDATE more_info SET " . "$i" . "=? WHERE login=?";
				$qq = $pdo -> prepare($sqll);
				$qq -> execute(array($upd_i[$i], $upd_i["login"]));
			}
		}
	} else {
		foreach ($info as $i) {
			if ($upd_i[$i] != "") {
				$sqll = "UPDATE more_info SET " . "$i" . "=? WHERE login=?";
				$qq = $pdo -> prepare($sqll);
				$qq -> execute(array($upd_i[$i], $upd_i["login"]));
			}
		}
	}
?>