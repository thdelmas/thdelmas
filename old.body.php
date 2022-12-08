<?php
$badges = array("https://img.shields.io/badge/c-%2300599C.svg?style=for-the-badge&logo=c&logoColor=white",
	"https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white",
	"https://img.shields.io/badge/go-%2300ADD8.svg?style=for-the-badge&logo=go&logoColor=white",
	"https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white",
	"https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E",
	"https://img.shields.io/badge/kotlin-%237F52FF.svg?style=for-the-badge&logo=kotlin&logoColor=white",
	"https://img.shields.io/badge/latex-%23008080.svg?style=for-the-badge&logo=latex&logoColor=white",
	"https://img.shields.io/badge/markdown-%23000000.svg?style=for-the-badge&logo=markdown&logoColor=white",
	"https://img.shields.io/badge/perl-%2339457E.svg?style=for-the-badge&logo=perl&logoColor=white",
	"https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white",
	"https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54",
	"https://img.shields.io/badge/shell-%23121011.svg?style=for-the-badge&logo=gnu-bash&logoColor=white")
?>
<?php
include 'identities.php'
?>

<section id="carroussel">
	<section id="socialgates" class="card">
		<h2>Social Medias</h2>
		<a href="https://cv.42.fr/thdelmas">
			<img src="https://img.shields.io/badge/mia-%2300BABB.svg?&style=for-the-badge&logo=42&logoColor=white" />
		</a>
		</br>
		<a href="https://github.com/thdelmas">
			<img src="https://img.shields.io/badge/github-%2337FF9B.svg?&style=for-the-badge&logo=github&logoColor=black" />
		</a>
		</br>
		<a href="https://open.spotify.com/user/31xyt7khqn7ujom2jvmttstq2r44?si=562ce81d181f4db0">
			<img src="https://img.shields.io/badge/spotify-%231DB954.svg?&style=for-the-badge&logo=spotify&logoColor=white" />
		</a>
		</br>
		<a href="https://www.linkedin.com/in/théophile-delmas-92275b16">
			<img src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />
		</a>
		</br>
		<a href="https://instagram.com/saint.leger">
			<img src="https://img.shields.io/badge/instagram-%23E4405F.svg?&style=for-the-badge&logo=instagram&logoColor=white" />
		</a>
	</section>
	<section class="card">
		<h2>Skills</h2>
		<section id='skills'>
			<h3>Languages</h3>
			<ul id="spokenlanguages">
				<li>🇬🇧</li>
				<li>🇫🇷</li>
				<li>🇪🇸</li>
			</ul>
			<h3>Programing Languages</h3>
			<ul id="programinglanguages">
			<?php
				foreach ($badges as $badge) {
				?>
					<li>
						<img src=<?php echo $badge ?>/>
					</li>
				<?php
				}
			?>
			</ul>
		</section>
	</section>
</section>
