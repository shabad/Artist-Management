(function() {
    'use strict';
    angular
        .module('ArtistAdmin')
        .controller('profileCtrl', ['$scope', '$http', 'fileUpload',  function($scope, $http, fileUpload) {




         $scope.uploadFile = function(){
                var file = $scope.myFile;
                console.log('file is ' );
                console.dir(file);

                var uploadUrl = "http://localhost:8000/artist/server/avatar.php";
                var text = "avatar";
                fileUpload.uploadFileToUrl(file, uploadUrl, text);
           };




        	$scope.alerts = [

                          ];

            $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };

        	$http.get("http://localhost:8000/artist/server/profile.php")
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
				$http.post('http://localhost:8000/artist/server/profile-edit.php', dataObj).then(function(response) {
					$scope.alerts.push({type: 'success', msg: 'Your profile has successfully been updated.'});
					$scope.message = response.data;
                    console.log($scope.message);
				}, function errorCallback(response){
					$scope.alerts.push({type: 'danger', msg: 'A Error has occured.'});
				});



			}
			

         }]);
})();