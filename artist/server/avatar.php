<?php
include('../db.php');
include('../session.php');

$target_dir = "./avatars/";

    $length = 4;
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    

     $name = strtolower ($_POST['name']);
     print_r($_FILES);
     $file_name = $str . basename($_FILES["file"]["name"]);
     $target_file = $target_dir . $file_name;
     

     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

     //write code for saving to database 
     include_once "config.php";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }

     //$sql = "INSERT INTO images (profile_id, image_category) VALUES ('".$id."','".basename($_FILES["file"]["name"])."')";

     if ($name == "avatar"){
        $sql = "UPDATE artists SET avatar = '".$file_name."' WHERE id= '".$id."'";

     }

     if ($conn->query($sql) === TRUE) {
         echo json_encode($_FILES["file"]); // new file uploaded
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
     }
     

     






?>