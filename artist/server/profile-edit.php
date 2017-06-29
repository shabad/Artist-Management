<?php
include('../db.php');
include('../session.php');






$data = json_decode(file_get_contents("php://input"));
$fname = $data->fname;
$lname = $data->lname;
$email = $data->email;
$phone = $data->phone;
$hours = $data->hours;
$bio = $data->bio;
$facebook = $data->facebook;
$instagram = $data->instagram;
$twitter = $data->twitter;
$google = $data->google;
$linkedin = $data->linkedin;

$sql = "UPDATE artists SET fname='". $fname ."', lname = '". $lname ."', email = '". $email ."', phone = '". $phone ."', hours = '". $hours ."', bio = '". $bio ."', facebook = '".$facebook."', instagram = '".$instagram."', twitter = '".$twitter."', google = '".$google."', linkedin = '".$linkedin."' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


echo $fname;






?>