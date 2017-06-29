<?php

$title = "";
$basename = $_SERVER["SCRIPT_NAME"];

if ($basename == "/index.php"){
	$title = "Museum Tattoo Shop";
}
elseif ($basename == "/about.php"){
	$title = "About Us";
}
else{
	$title = "f";
}

?>