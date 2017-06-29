<?php
   include('../../session.php');
?>


<!--  -->

<div class="jumbotron text-center">
    <h3>Create a new User </h3>
    <br>

    <br>
<div>
 <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Avatar</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
                <div class="file-upload">
        
        <input type="file" file-model="myFile"/>
        
    </div>
    
                    <!-- {{names.fname}} -->
                </div>
       <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">

    <button class="btn btn-default" ng-click="uploadFile()">

<span class="glyphicon glyphicon-upload"></span> Upload
    </button>

                    <!-- {{names.fname}} -->
                </div>
 
            </div>


<br>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>First Name</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="fname">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Last Name</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="lname">
                    <!-- {{names.lname}} -->
                </div>

            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Email</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="email">
                    <!-- {{names.email}} -->
                </div>

            </div>

            <br>
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Password</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="Password" class="form-control" name="password" ng-model="password">
                   
                </div>

            </div>



              <br>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Phone</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="phone">
                    <!-- {{names.phone}} -->
                </div>
  
            </div>

              <br>


             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Hours</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="hours">
                    <!-- {{names.hours}} -->
                </div>
          
            </div>

            <br>

      <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Bio</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <textarea class="form-control" rows="8" ng-model = "bio" > </textarea>
                
                    <!-- {{names.bio}} -->
            </div>
      

        </div>
        <br>

                    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Instagram</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="instagram">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Facebook</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="facebook">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Twitter</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="twitter">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>
<br>
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Google</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="google">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>
            <br>

                         <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>LinkedIn</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="linkedin">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>




        <br>
        <br>
        <button type="button" class="btn btn-default" ng-click="create()">Create</button>
        </form>
        <br>
        <br>
         <div uib-alert ng-repeat="alert in alerts" dismiss-on-timeout="5000" ng-class="'alert-' + (alert.type || 'warning')" close="closeAlert($index)">{{alert.msg}}</div>

        
</div>