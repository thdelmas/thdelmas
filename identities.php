<?php
ob_start(); // begin collecting output

include 'nametitled.php';

$result = ob_get_clean();
$name = $result
?>
<section id="identities" class="card">
<h1 id="nametitled" class=""><?php echo $name ; ?></h1><h1 class="normal_text">🧑‍💻🌴🚀</h1>
</section>

<script>
	function changeName()
	{
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("GET", "/nametitled.php", false);
		xmlHttp.send(null);
		document.getElementById("nametitled").innerHTML = xmlHttp.responseText;
	}
	setInterval(changeName, 4242);
</script>
