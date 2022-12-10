<?php
ob_start(); // begin collecting output

include 'randomAchievement.php';

$result = ob_get_clean();
$achievement = json_decode($result, true);
?>

<section id="achievements" class="card matrix">
	<h1>Achievements 42</h1>
		<article id="achievement">
		<span id="achievement_left">
			<img src="<?php print "https://api.intra.42.fr" . $achievement["image"]; ?>" />
		</span>
		<span id="achievement_right">
			<h2><?php print $achievement["name"]; ?></h2>
			<p><?php print $achievement["description"]; ?></p>
			</article>
		</span>
</section>

<script>
	function changeAchievement()
	{
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("GET", "/randomAchievement.php", false);
		xmlHttp.send(null);
		achievement = JSON.parse(xmlHttp.responseText)
		document.querySelector("#achievement_right>h2").innerHTML = achievement["name"];
		document.querySelector("#achievement_left>img").setAttribute("src", "https://api.intra.42.fr" + achievement["image"]);
		document.querySelector("#achievement_right>p").innerHTML = achievement["description"];
	}
	setInterval(changeAchievement, 4242);
</script>
