<?php

$title = "";
$basename = $_SERVER["SCRIPT_NAME"];

if ($basename == "/index.php"){
	$title = "Museum Tattoo Shop";

}
elseif ($basename == "/artists.php"){
	$title = "Artitsts";
	$heading = "Artists";
}
elseif ($basename == "/about.php"){
	$title = "About Us";
	$heading = "About Us";
}

elseif ($basename == "/artist_profile.php"){
	$title = "Artist";
	$heading = "Artist";
}

elseif ($basename == "/contact.php"){
	$title = "Contact Us";
	$heading = "Contact Us";
}
elseif ($basename == "/appointment.php"){
	$title = "Appointment";
	$heading = "Appointments";
}
else{
	$title = "f";
}

?>