<main>
<?php 
	if (preg_match('#/contribute#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/contribute.php";
	}
	else if (preg_match('#/achievements#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/achievements.php";
	}
	else if (preg_match('#/contact#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/contact.php";
	}
	else if (preg_match('#/timeline#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/timeline.php";
	}
	else {
		include "./srcs/home.php";
	}
?>
</main>
