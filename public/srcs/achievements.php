<?php
$string = file_get_contents("assets/achievements.json");
//$string = iconv('UTF-8', 'UTF-8//IGNORE', utf8_encode($input));
$json_a = json_decode($string, true);
$achievement = $json_a[array_rand($json_a)];
?>

<section id="achievements" class="card matrix">
	<h1>Achievements</h1>
		<article id="achievement">
		<img src="https://42.fr/wp-content/uploads/2021/05/42-Final-sigle-seul.svg" id="achievement_source_logo" />
		<div id="achievement_display">
		<span id="achievement_left">
			<img src="<?php print "https://api.intra.42.fr" . $achievement["image"]; ?>" id="achievement_logo" />
		</span>
		<span id="achievement_right">
			<h2><?php print $achievement["name"]; ?></h2>
			<p><?php print $achievement["description"]; ?></p>
			</article>
		</span>
		</div>
</section>

<script>
	function changeAchievement()
	{
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("GET", "/achievements", false);
		xmlHttp.send(null);
		achievement = JSON.parse(xmlHttp.responseText)
		document.querySelector("#achievement_right>h2").innerHTML = achievement["name"];
		document.querySelector("#achievement_logo").setAttribute("src", "https://api.intra.42.fr" + achievement["image"]);
		document.querySelector("#achievement_right>p").innerHTML = achievement["description"];
	}
	setInterval(changeAchievement, 4242);
</script>
