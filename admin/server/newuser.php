<?php
include('../db.php');
include('../session.php');

$data = json_decode(file_get_contents("php://input"));

$fname = $data->fname;
$lname = $data->lname;
$email = $data->email;
$password = $data->password;
$phone = $data->phone;
$hours = $data->hours;
$bio = $data->bio;
$facebook = $data->facebook;
$instagram = $data->instagram;
$twitter = $data->twitter;
$google = $data->google;
$linkedin = $data->linkedin;


$sql = "INSERT INTO artists (fname, lname, email, admin, password, phone, hours, bio, facebook, instagram, twitter, google, linkedin)
VALUES ('".$fname."', '".$lname."', '".$email."', '0', '".$password."', '".$phone."', '".$hours."', '".$bio."', '".$facebook."', '".$instagram."', '".$twitter."', '".$google."', '".$linkedin."')";




if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}

?>