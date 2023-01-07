<main>
<?php 
	if (preg_match('#/$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/home.php";
	}
	else if (preg_match('#/achievements$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/achievements.php";
	}
	else if (preg_match('#/contact$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/contact.php";
	}
	else if (preg_match('#/timeline$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/timeline.php";
	}
	else if (preg_match('#/contribute$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/contribute.php";
	}
	else if (preg_match('#/skills$#', $_SERVER['REQUEST_URI'], $matches)) {
		include "./srcs/skills.php";
	}
	else {
		http_response_code(404);
		include "./srcs/errors/404.php";
		die();
	}
?>
</main>
