<?php
include('../db.php');
include('../session.php');

$data = json_decode(file_get_contents("php://input"));
$imageId = $data->id;

$sql = "DELETE FROM images WHERE id = '".$imageId."'";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "false";
}

?>