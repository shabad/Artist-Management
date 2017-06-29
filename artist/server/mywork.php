<?php
include('../db.php');
include('../session.php');


$arr = array();

$data = json_decode(file_get_contents("php://input"));
$cat = $data->cat;


$sql = "SELECT * FROM images WHERE image_category = '".$cat."' AND profile_id = '".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $insert = array('image' => array('url'=>$row["image_url"], 'category'=>$row["image_category"], 'id'=>$row["id"]) );
        array_push($arr, $insert);
    }
} else {
    echo "0 results";
}


echo json_encode($arr, JSON_FORCE_OBJECT);






?>