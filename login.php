<?php
session_start();
   include("./include/db.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id, admin FROM artists WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['myusername']== $myusername;
         
         
         if($row['admin'] == 1){
            $_SESSION['admin'] = $active;
            header("location: ./admin/index.php");
         }
         else{
         $_SESSION['login_user'] = $active;
         header("location: ./artist/index.php");
      }
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
            <?php
            require('./template/header.php');
            ?>

            <div id="main">

            <?php
            require('./template/bar.php');
            ?>

            <?php
            require('./include/db.php');
            ?>


            <div id="main">

<style type="text/css">
    .col-centered{
    float: none;
    margin: 0 auto;
}

.login{
    margin-top:10px;
}
</style>



                <!-- ============ Our Artists - START ============ -->

                <div id="artists" class="section">

                    <div class="section-title bg-glyph center">
                        <h2>Login</h2>
                    </div>

                    <div class="container center" style ="margin-right:80px;">
                   
<form action="" method="POST">
                        <div class="row">
                        <div class="col-md-2"></div>
                          <div class="col-md-1"><label><strong></strong></label></div>
                          <div class="col-md-6"><input class="required" type="text" name="username" placeholder="Email"></div>
                        </div>

                         <div class="row">
                         <div class="col-md-2"></div>
                          <div class="col-md-1"><label><strong></strong></label></div>
                          <div class="col-md-6"><input class="required" type="password" name="password" placeholder="Password"></div>

                        </div>


                         <div class="row">
                         <div class="col-md-2"></div>
                          <div class="col-md-1"></div>
                          <div class="col-md-6"><input class="submit btn sm" type="submit" name="submit" value="Login"></div>

                        </div>
</form>
                        


                       

               

                    </div>

                </div>



                <!-- ============ Our Artists - END ============ -->

                
            <?php
            require('./template/insta_bar.php');
            ?>

            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
            