(function() {
    'use strict';
    angular
        .module('ArtistAdmin')





.controller('galleryCtrl', ['$scope', 'fileUpload', 'config', function($scope, fileUpload, config){

      $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };

          $scope.closeAlertExcel = function(index) {
              $scope.alertsExcel.splice(index, 1);
            };

          $scope.alerts = [

                          ];

 $scope.uploadFile = function(){
    if($scope.category == null || $scope.category == ''){
        $scope.alerts.push({type: 'danger', msg: 'Category cannot be empty'});
        return;

    }

        if($scope.myFile== null){
        $scope.alerts.push({type: 'danger', msg: 'Please upload a file'});
        return;

    }

        var file = $scope.myFile;
        console.log('file is ' );
        console.dir(file);

        var uploadUrl = config.API+"upload.php";
        var text = $scope.category;
        fileUpload.uploadFileToUrl(file, uploadUrl, text);
        $scope.alerts.push({type: 'success', msg: 'Image has been uploaded'});

        $('#myfile').val('');
        $scope.category = null;

   };


    }]);

})();
