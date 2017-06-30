(function() {
    'use strict';
    angular
        .module('ArtistAdmin')
        .controller('profileCtrl', ['$scope', '$http', 'fileUpload', 'config',  function($scope, $http, fileUpload, config) {

            $scope.alertsImage = [

                          ];


console.log(config.API)
             $scope.closeAlertImage = function(index) {
              $scope.alertsImage.splice(index, 1);
            };



         $scope.uploadFile = function(){
                    if($scope.myFile== null){
                        $scope.alertsImage.push({type: 'danger', msg: 'Please upload a file'});
                             return;

                        }
                var file = $scope.myFile;
                console.log('file is ' );
                console.dir(file);

                var uploadUrl = config.API+"avatar.php";
                var text = "avatar";
                fileUpload.uploadFileToUrl(file, uploadUrl, text);
                $('#myfile').val('');
                $scope.alertsImage.push({type: 'success', msg: 'Your avatar has been changed'});
           };




        	$scope.alerts = [

                          ];

            $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };

        	$http.get(config.API+"profile.php")
				.then(function (response) {$scope.names = response.data});


			$scope.edit= function(){
				 var dataObj = {
        				fname : $scope.names.fname,
        				lname : $scope.names.lname,
        				email : $scope.names.email,
        				phone : $scope.names.phone,
        				hours : $scope.names.hours,
        				bio : $scope.names.bio,
                        instagram : $scope.names.instagram,
                        facebook : $scope.names.facebook,
                        twitter : $scope.names.twitter,
                        google : $scope.names.google,
                        linkedin : $scope.names.linkedin
        		};


        		console.log(dataObj);
				$http.post(config.API+'profile-edit.php', dataObj).then(function(response) {
					$scope.alerts.push({type: 'success', msg: 'Your profile has successfully been updated.'});
					$scope.message = response.data;
                    console.log($scope.message);
				}, function errorCallback(response){
					$scope.alerts.push({type: 'danger', msg: 'A Error has occured.'});
				});



			}
			

         }]);
})();