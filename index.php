<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="css/main_styles.css"> -->
</head>
<body>
	<form>
		<input type="text" class="name" placeholder="Введите имя"> <br>
		<input type="text" class="email" placeholder="Введите email"> <br>
		<input type="password" class="password" placeholder="Введите пароль"> <br>
		<button type="button" class="registr">Войти</button>
		<div class="error-txt"></div>
	</form>
	<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
	<!-- <script src="js/main.js"></script> -->
	<script>

		function myAjaxQuery() {
			let name = $(".name").val();
			let pass = $(".password").val();
			$.ajax({
				url: 'php/log.php',
				type: 'POST',
				cache: false,
				data: {'name' : name, 'pass' : pass},
				dataType: 'html',
				success: function (data) {
					let txt = $(".error-txt");
					txt.fadeIn("slow");
					txt.text(data);
					// console.log(data);
					if (data == true) {
						txt.css("color", "green");
						txt.text("Вход был выполнен");
						txt.fadeOut(2500);
					} else {
						txt.css("color", "red");
						txt.text("Неверный логин или пароль");
						txt.fadeOut(2500);
					}
				}
			});
		}

		$(".registr").on("click", function () {
			myAjaxQuery();
		});
		
	</script>
	
</body>
</html>