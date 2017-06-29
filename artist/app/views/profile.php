<?php
   include('../../session.php');
?>


<!--  -->

<div class="jumbotron text-center">
    <h3>Profile </h3>
    <br>

    <br>
 <div class="container-fluid">
 <form>

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
                <input type="text" class="form-control" name="fname" ng-model="names.fname">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Last Name</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.lname">
                    <!-- {{names.lname}} -->
                </div>

            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Email</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.email">
                    <!-- {{names.email}} -->
                </div>

            </div>

            	<br>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Phone</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.phone">
                    <!-- {{names.phone}} -->
                </div>
  
            </div>

            	<br>


             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Hours</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.hours">
                    <!-- {{names.hours}} -->
                </div>
          
            </div>

            <br>

		  <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Bio</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <textarea class="form-control" rows="8" ng-model = "names.bio" > </textarea>
                
                    <!-- {{names.bio}} -->
            </div>
      

        </div>
        <br>

                    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Instagram</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.instagram">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Facebook</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.facebook">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>

            <br>

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Twitter</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.twitter">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>
<br>
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>Google</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.google">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>
            <br>

                         <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <strong>LinkedIn</strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                <input type="text" class="form-control" name="fname" ng-model="names.linkedin">
                    <!-- {{names.fname}} -->
                </div>
 
            </div>




        <br>
        <br>
        <button type="button" class="btn btn-default" ng-click="edit()">Edit</button>
        </form>
        <br>
        <br>
        <div uib-alert ng-repeat="alert in alerts" dismiss-on-timeout="5000" ng-class="'alert-' + (alert.type || 'warning')" close="closeAlert($index)">{{alert.msg}}</div>

        
</div>