<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.8/angular.js"></script>
      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/machineboy2045-angular-selectize2/3.0.1/angular-selectize.js"></script> -->
    <!-- CSS (load bootstrap) -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <script src="./js/jquery.min.js"></script>
        <script src="./js/common.js"></script>
        <script src="./js/config.js"></script>
        <script src="./js/main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">





    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/main.css" >
    <style>
        .navbar { border-radius:0; }
    </style>

    <!-- JS (load angular, ui-router, and our custom js file) -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-animate.js"></script>


     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-touch.js"></script>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.js"></script>

       

       

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-file-upload/2.5.0/angular-file-upload.js"></script>

    <script src="https://cdn.jsdelivr.net/angular.ui-router/1.0.1/angular-ui-router.min.js"></script>
    <script src="./app/config.js"></script>
    <script src="./app/controllers/profileCtrl.js"></script>
    <script src="./app/controllers/galleryCtrl.js"></script>
     <script src="./app/controllers/imagesCtrl.js"></script>
 
    <script src="./app/directives/gallery_directive.js"></script>
      <script src="./app/services/gallery_service.js"></script>

</head>

<body ng-app="ArtistAdmin">

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                <?php
                   echo '<img src="./server/avatars/'.$avatar.'" class="img-responsive" alt="">';
                    ?>
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                    <?php
                    echo (ucwords($fname));
                    echo " ";
                    echo (ucwords($lname));
                    ?>
                    </div>
                    <div class="profile-usertitle-job">
                        Tattoo Artist
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">View Profile</button>
                    
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">

                        <li ui-sref-active="active">
                            <a ui-sref="home">
                            <i class="glyphicon glyphicon-home"></i>
                            Home </a>
                        </li>
                        <li ui-sref-active="active">
                            <a ui-sref="profile">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile Settings </a>
                        </li>
                        <li ui-sref-active="active">
                            <a ui-sref="gallery">
                            <i class="glyphicon glyphicon-picture"></i>
                            Upload </a>
                        </li>

                        <li ui-sref-active="active">
                            <a ui-sref="images">
                            <i class="glyphicon glyphicon-camera"></i>
                            My Work </a>
                        </li>


                        <li ui-sref-active="active">
                            <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                        </li>
                        <li ui-sref-active="active">
                            <a href="logout.php">
                            <i class="glyphicon glyphicon-off"></i>
                            Logout </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
               <div ui-view></div>
            </div>
        </div>
    </div>
</div>
<center>

</center>
<br>
<br>
</body>
</html>
