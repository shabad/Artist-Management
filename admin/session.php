<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['admin'];
   
   $ses_sql = mysqli_query($conn,"select id, admin, avatar, fname, lname, email from artists where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id = $row['id'];
   $fname = $row['fname'];
   $lname = $row['lname'];
   $email = $row['email'];
   $avatar = $row['avatar'];
   $admin = $row['admin'];
   
   if(!isset($_SESSION['admin']) || $admin == 0){
      header("location:../login.php");
   }

?>