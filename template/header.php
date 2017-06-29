<?php
$server  = $_SERVER['DOCUMENT_ROOT'];
require("{$server}/include/title.php");

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title><?php  echo $title;  ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>

        <div class="wrapper">

            <!-- ============ Main Header - START ============ -->

            <header id="master-header">
                <div class="top-header">
                    
                    <div class="container">

                        <h1 id="logo">
                            <a href="index.php">
                                <img src="../img/logo.png" alt="The Tattooist - Tattoo Studio" >
                            </a>
                        </h1>

                        <!-- ============ Main Navigation - START ============ -->

                        <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>
                                <li class=<?php  if ($basename == "/about.php"){echo "selected";}    ?>>
                                    <a title="About" href="about.php">About Us</a>

                                </li>
                                <li class=<?php  if ($basename == "/artists.php"){echo "selected";}    ?>>
                                    <a title="Artists" href="artists.php">Artists</a>
                                </li>

                                <li class=<?php  if ($basename == "/contact.php"){echo "selected";}    ?>>
                                <a title="Contact" href="contact.php">Contact Us</a>
                                </li>

                                <li class=<?php  if ($basename == "/appointment.php"){echo "selected";}    ?>>
                                <a title="Appointment Page" href="appointment.php">Appointment</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- ============ Main Navigation - END ============ -->

                    </div>
                </div>

                <h2 id="page-title"><?php  echo $heading;  ?></h2>
            </header>

            <!-- ============ Main Header - END ============ -->
