<?php
include('../db.php');
include('../session.php');

$data = json_decode(file_get_contents("php://input"));
$category = $data->category;

$idw = 1;
$sql = "UPDATE images SET image_category='". $category ."' WHERE id='$idw'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}






?>