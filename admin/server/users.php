<?php
include('../db.php');
include('../session.php');


$arr = array();




$sql = "SELECT DISTINCT id, fname, lname, email FROM artists WHERE admin = 0";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $insert = array('id' => $row["id"], 'fname'=>$row["fname"], 'lname'=>$row["lname"], 'email'=>$row["email"]);
        array_push($arr, $insert);
    }
} else {
    echo "0 results";
}


echo json_encode($arr, JSON_FORCE_OBJECT);

?>