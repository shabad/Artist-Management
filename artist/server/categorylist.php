<?php
include('../db.php');
include('../session.php');


$arr = array();




$sql = "SELECT DISTINCT image_category FROM images WHERE profile_id = '".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $insert = array('text' => $row["image_category"], 'value'=>$row["image_category"] );
        array_push($arr, $insert);
    }
} else {
    echo "0 results";
}


echo json_encode($arr, JSON_FORCE_OBJECT);

?>