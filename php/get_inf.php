<?php 
	$server = "aniprog.org/person.php";
	$db = "users";
	$user = "root";
	$pass = "";

	$dsn = "mysql:host=$host;dbname=$db;";

	$pdo = new PDO($dsn, $user, $pass);

	$login = $_GET["login"];
	$xx = array ("email", "name", "surname", "city", "country", "job", "gender");

	$sql = "SELECT * FROM more_info WHERE login=?";
	$query = $pdo -> prepare($sql);
	$query -> execute([$login]);

	$users = $query -> fetchAll()[0];
	$data = array ();
	foreach ($xx as $x) {
		if ($users[$x] == "") {
			$data[$x] = "Не указано";
		}
		else {
			$data[$x] = $users[$x];
		}
	}
	echo json_encode($data);
?>