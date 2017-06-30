<?php

if ( isset( $_POST['email'] ) ) {

	// Function to strip html tags from form data
	function cleanFields( $elem ) {
		return strip_tags( $elem );
	}

	extract( array_map( 'cleanFields', $_POST ) );

	// Check if all fields are valid (It's an additional check if the javascript validation has failed)
	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {

		echo 'fail';
	} 
	else{
		//SEND PHP MAIL
		$to = $email;
		$subject = "New Message on your website";
		$txt = "Message by:'".$name."'. <br> $message";
		$headers = "From: shabad.sobti@gmail.com" . "\r\n" .;

		mail($to,$subject,$txt,$headers);
		echo 'success';
	}

}