<?php
   include('../../session.php');
?>


<!--  -->

<div class="jumbotron text-center">
    <h3>Artists </h3>
    <br>

    <br>

<div class="table-responsive">          
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>


    <tbody>
      <tr ng-repeat="user in users">
        <td>{{user.fname}} {{user.lname}}</td> 
        <td>{{user.email}}</td>
        <td><button class="glyphicon glyphicon-remove" ng-click="remove(user.id)"></button></span></td>
      </tr>
    </tbody>
  </table>
  </div>


        
</div>