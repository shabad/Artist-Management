<?php
include('../session.php');

// $outp = "";
// // $outp .= ",";
// $outp .= '{"fname":"'  . $fname . '",';
// $outp .= '"City":"'   . $lname        . '",';
// $outp .= '"Country":"'. $rs["Country"]     . '"}';

// $outp ='{"records":['.$outp.']}';

// echo($outp);

$arr = array('fname' => ucwords($fname), 'lname' => ucwords($lname), 'email' => $email, 'bio' => $bio, 'phone' => $phone, 'hours' => $hours, 'instagram' => $instagram, 'facebook' => $facebook, 'twitter' => $twitter, 'google' => $google, 'linkedin' => $linkedin);

echo json_encode($arr);




?>