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
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/custom.css">
        <link href="https://fonts.googleapis.com/css?family=Pirata+One" rel="stylesheet">
    </head>
    <body>

        <div class="wrapper">

            <header id="master-header" class="full-screen overlayed">

                <div class="bg-overlay"></div>
                <div id="media-container"></div>
                <div class="top-header">

                    <div class="container">

                        <!-- ============ Main Navigation - START ============ -->

                        <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>
                                <li>
                                    <a title="About" href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a title="Artists" href="artists.php">Artists</a>
                                </li>
                                <li>
                                    <a title="Contact" href="contact.php">Contact Us</a>

                                </li>
                                <li><a title="Appointments" href="appointment.php"><i class="fa fa-thumb-tack"></i>Appointment</a></li>
                            </ul>
                        </nav>

                        <!-- ============ Main Navigation - END ============ -->

                    </div>

                </div>

                <div id="brand">

                    <h1 id="logo" style="font-size:70px; line-height: 1.3em; font-family: 'Pirata One', cursive;"><imgalt="The Tattooist - Tattoo Studio"> The Museum Tattoo <br> Shop</h1>
                    <div class="info">
                        <span><a class="btn md dark" href="appointment.html"><i class="fa fa-thumb-tack"></i>Appointment</a></span>
                    </div>
                    <!-- <p></p> -->
                     <div class="buttonAppointment">
                         <a class="btn md dark" href="appointment.html"><i class="fa fa-thumb-tack"></i>Appointment</a>
                    </div>

                </div>

            </header>

            <!-- ============ Main Header - END ============ -->

            <div id="main">

                <!-- ============ Contacts Bar - START ============ -->

                <div id="contacts-bar" class="row">
                    <div class="address col-md-6"><strong>My Museum Tattoo Shop</strong>, 1234 Our Awesome Street, Our Awesome City, OAS 123456</div>
                    <div class="other col-md-6">
                        <span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
                        <span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
                    </div>
                </div>

                <!-- ============ Contacts Bar - END ============ -->

                <!-- ============ Services - START ============ -->

                <div id="service" class="section">

                    <div class="content container">

                        <div class="row">
<h4>My Museum Tattoo Studio</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo fermentum tellus a aliquet. Aliquam sed velit sed enim luctus pretium sed ac mi. Nulla sed pharetra sapien, dignissim rutrum orci. Suspendisse rhoncus, lacus ut porta vulputate, nibh leo fermentum arcu, scelerisque pharetra diam metus vitae lacus. Phasellus rutrum odio sed elit commodo porta. Maecenas quis risus velit. Aliquam erat volutpat. Etiam viverra mattis fringilla. Vestibulum sit amet lacus a magna tempor vulputate non tempor erat. Suspendisse varius velit quis quam venenatis maximus. Ut in purus tempor, efficitur leo aliquam, interdum risus.

</p>
                         <!--    <div class="col-md-4">
                                <h3>Service A</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Service B</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Service C</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Service D</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Service E</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div>
                            <div class="col-md-4">
                                <h3>Service F</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                            </div> -->

                        </div>

                    </div>

                </div>

                <!-- ============ Services - END ============ -->

                <!-- ============ Call to Action - START ============ -->

                <div id="appointment" class="section cta dark">

                    <h2>Are you ready to get a tattoo?</h2>

                    <div class="cta-info">Request an appointment <strong>NOW</strong>!</div>

                    <a class="btn md light" href="appointment.html"><i class="fa fa-thumb-tack"></i>Appointment</a>

                </div>

                <!-- ============ Call to Action - END ============ -->

              
            <?php
            require('./template/insta_bar.php');
            ?>
                    
            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
                    <script>
            $('#media-container').backstretch('img/bg.jpg');
        </script>