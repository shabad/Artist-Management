            <?php
            require('./template/header.php');
            ?>
                        <?php
            require('./include/db.php');
            ?>

            <div id="main">

            <?php
            require('./template/bar.php');
            ?>

            <?php
                $artist_id = $_GET['id'];
                $sql = "SELECT * FROM artists WHERE id = '".$artist_id."'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                // echo $row['fname'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $bio = $row['bio'];
                $email = $row['email'];
                $phone = $row['phone'];
                $facebook = $row['facebook'];
                $google = $row['google'];
                $insta = $row['instagram'];
                $twitter = $row['twitter'];
                $linkedin = $row['linkedin'];
                $hours = $row['hours'];
                $url = $row['avatar'];



            ?>



                <!-- ============ Artist Description - START ============ -->

                <div class="section">

                    <div class="content container">

                        <div class="full row">

                            <div class="col-md-6">

                                <p><strong>Hi, my name is <?php  echo ucwords($fname); echo " "; echo ucwords($lname);  ?></strong> <br> 
                                <?php
                                    echo $bio;
                                ?>
                                </p>

                                <h4>Get in touch!</h4>
                                <p> <strong>Phone: </strong> <?php echo $phone;  ?> </p>
                                <p> <strong>Email:</strong> <?php echo $email;  ?> </p>
                                <p> <strong>Hours:</strong> <?php echo $hours;  ?> </p>

                                <h4>Connect with me!</h4>
                                <ul class="social-links">

                                <!-- THIS IS THE PROFILE SECTION SOCIALS SECTION -->

                                <?php 

                                if ($facebook!=NULL){

                                    echo '<li>';
                                    
                                    echo '<a title="Facebook" href=  "'.$facebook.'" >';
                                    
                                    echo '<i class="fa fa-facebook"></i></a></li>';

                                    }
                                ?>

                                <?php 

                                if ($twitter!=NULL){

                                    echo '<li>';
                                    
                                    echo '<a title="Twitter" href=  "'.$twitter.'" >';
                                    
                                    echo '<i class="fa fa-twitter"></i></a></li>';

                                    }
                                ?>

                                <?php 

                                if ($google!=NULL){

                                    echo '<li>';
                                    
                                    echo '<a title="Google+" href=  "'.$google.'" >';
                                    
                                    echo '<i class="fa fa-google-plus"></i></a></li>';

                                    }
                                ?>

                               <?php 

                                if ($insta!=NULL){

                                    echo '<li>';
                                    
                                    echo '<a title="Instagram" href=  "'.$insta.'" >';
                                    
                                    echo '<i class="fa fa-instagram"></i></a></li>';

                                    }
                                ?>

                                <?php 

                                if ($linkedin!=NULL){

                                    echo '<li>';
                                    
                                    echo '<a title="LinkedIn" href=  "'.$linkedin.'" >';
                                    
                                    echo '<i class="fa fa-linkedin"></i></a></li>';

                                    }
                                ?>
                                <!-- PROFILE SOCIAL ENDS HERE -->

                                    
                                </ul>

                                
                           



  

                            </div>

                            <div class="col-md-6">

                            <?php
                            if($url == null){
                                echo '<img src="./img/artist.jpg" alt="Tattoo Artist" height="500">';

                            }
                            else{

                               echo '<img src="./artist/server/avatars/'.$url.'" alt="Tattoo Artist" height="500">';
                           }
                            ?>

                                

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ============ Artist Description - END ============ -->

                 <!-- ============ Works - START ============ -->

                <div class="section">
                                    <div class="section-title">
                        <h2>My Works</h2>
                    </div>

                    <div class="content container">

                    <?php

                        $sql = "SELECT DISTINCT image_category FROM images WHERE profile_id = '".$artist_id."'";
                        $result = $conn->query($sql);
                    ?>

                        <div class="filters">
                        <a href="#" data-filter="*" class="btn sm light all">All</a>
                        <?php
                             while($row = $result->fetch_assoc()) {
                                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                echo '<a href="#" data-filter=".'.$row["image_category"].'" class="btn sm">'.$row["image_category"].'</a>';
                            }
                            //$conn->close();
                        ?>
                 
                        </div>

                        <div class="works">


                        <?php

                            $sql = "SELECT * FROM images WHERE profile_id = '".$artist_id."'";
                            $result = $conn->query($sql);

                            while($row = $result->fetch_assoc()) {
                                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                // echo '<a href="#" data-filter=".'.$row["image_category"].'" class="btn sm">'.$row["image_category"].'</a>';

                               echo '<div class="work col-md-3 col-sm-6 '.$row["image_category"].'">';

                                   echo  '<div class="work-thumb">';
                                       echo '<img src="./artist/server/uploads/'.$row['image_url'].'" alt="Work 01">';
                                       echo '<div class="thumb-links">';
                                           echo '<a class="zoom" href="./artist/server/uploads/'.$row['image_url'].'"></a>';
                                       echo '</div>';
                                    echo '</div>';

                               echo '</div>';

                            }




                        ?>



                        </div>

                    </div>

                </div>

                <!-- ============ Works - END ============ -->

               
            <?php
            require('./template/insta_bar.php');
            ?>

            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
            