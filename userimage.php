<?php

/* 

 Código realizado por Jonathan Nascimento - propagano
          instagram profissional: @propagano                                                               
  _ __  _ __ ___  _ __   __ _  __ _  __ _ _ __   ___  
 | '_ \| '__/ _ \| '_ \ / _` |/ _` |/ _` | '_ \ / _ \ 
 | |_) | | | (_) | |_) | (_| | (_| | (_| | | | | (_) |
 | .__/|_|  \___/| .__/ \__,_|\__, |\__,_|_| |_|\___/ 
 | |             | |           __/ |                  
 |_|             |_|          |___/                   

*/

if (!isset($_GET["action"])) {
	$_GET["action"] = "std";
}

if (!isset($_GET["direction"])) {
	$_GET["direction"] = "2";
}

if (!isset($_GET["head_direction"])) {
	$_GET["head_direction"] = "2";
}

if (!isset($_GET["gesture"])) {
	$_GET["gesture"] = "std";
}

if (!isset($_GET["size"])) {
	$_GET["size"] = "b";
}

$json_file = file_get_contents("http://v3.blet.in/api/user?user=".$_GET["user"]);
$json_str = json_decode($json_file, true);

foreach ( $json_str as $i ){
$src= "http://habbo.city/habbo-imaging/avatarimage?figure=".$i['figure']."&action=".$_GET["action"]."&direction=".$_GET["direction"]."&head_direction=".$_GET["head_direction"]."&gesture=".$_GET["gesture"]."&size=".$_GET["size"];

header("Content-type: image/png");
$imagem = imagecreatefromstring(file_get_contents($src));

$purple = imagecolorexact($imagem, 255, 0, 255);
imagecolortransparent($imagem, $purple);
imagepng($imagem);
ImageDestroy($imagem);

} 


?>