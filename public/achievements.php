<?php
ob_start(); // begin collecting output

include 'randomAchievement.php';

$result = ob_get_clean();
$achievement = json_decode($result, true);
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
		xmlHttp.open("GET", "/randomAchievement.php", false);
		xmlHttp.send(null);
		achievement = JSON.parse(xmlHttp.responseText)
		document.querySelector("#achievement_right>h2").innerHTML = achievement["name"];
		document.querySelector("#achievement_logo").setAttribute("src", "https://api.intra.42.fr" + achievement["image"]);
		document.querySelector("#achievement_right>p").innerHTML = achievement["description"];
	}
	setInterval(changeAchievement, 4242);
</script>
