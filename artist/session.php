<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select id, avatar, fname, lname, email, bio, phone, hours, facebook, instagram, linkedin, twitter, google from artists where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id = $row['id'];
   $fname = $row['fname'];
   $lname = $row['lname'];
   $email = $row['email'];
   $bio = $row['bio'];
   $hours = $row['hours'];
   $phone = $row['phone'];
   $facebook = $row['facebook'];
   $twitter = $row['twitter'];
   $google = $row['google'];
   $linkedin = $row['linkedin'];
   $instagram = $row['instagram'];
   $avatar = $row['avatar'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>