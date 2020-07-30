<?php
	if (isset($_COOKIE["now_loged"])) {
		echo $_COOKIE["now_loged"];
	}
	else {
		echo "false";
	}
?>