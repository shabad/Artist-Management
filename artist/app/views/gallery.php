<?php
   include('../../session.php');

?>

 <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>

            
            canvas {
                background-color: #f3f3f3;
                -webkit-box-shadow: 3px 3px 3px 0 #e3e3e3;
                -moz-box-shadow: 3px 3px 3px 0 #e3e3e3;
                box-shadow: 3px 3px 3px 0 #e3e3e3;
                border: 1px solid #c3c3c3;
                height: 100px;
                width:120px;
                margin: 6px 0 0 6px;
            }
        </style>

<div class="jumbotron text-center">
<h3> Upload Images </h3>
<br>
    <div class="file-upload">

    <div class="row">
    <form>
  <div class="col-sm-4"><input type="file" file-model="myFile" id = "myfile" name = "myfile"/></div>
  <div class="col-sm-8"><input type="text" class = "form-control" ng-model="category"></div>
</div>


<br>

        <button ng-click="uploadFile()" class="btn btn-default">Upload</button>
        </form>
    </div><br>
<div uib-alert class = "alertMsg" ng-repeat="alert in alerts" dismiss-on-timeout="5000" ng-class="'alert-' + (alert.type || 'warning')" close="closeAlert($index)">{{alert.msg}}</div>
</div>