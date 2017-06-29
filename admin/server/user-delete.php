<?php
include('../db.php');
include('../session.php');






$data = json_decode(file_get_contents("php://input"));
$userId = $data->id;


$sql = "DELETE FROM artists WHERE id='".$userId."'";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error updating record: " . $conn->error;
}








?>