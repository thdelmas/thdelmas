<?php
$string = file_get_contents("./achievements.json");
$json_a = json_decode($string, true);

$achievement = $json_a[array_rand($json_a)];
echo json_encode($achievement);
?>
