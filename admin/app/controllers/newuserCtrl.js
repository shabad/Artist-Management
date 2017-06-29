(function() {
    'use strict';
    angular
        .module('Admin')
        .controller('newuserCtrl', ['$scope', '$http',  function($scope, $http) {



        	$scope.alerts = [

                          ];

            $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };



			$scope.create = function(){

				 var dataObj = {
        				fname: $scope.fname,
                        lname: $scope.lname,
                        email: $scope.email,
                        password: $scope.password,
                        phone: $scope.phone,
                        hours: $scope.hours,
                        bio: $scope.bio,
                        instagram: $scope.instagram,
                        twitter: $scope.twitter,
                        google: $scope.google,
                        linkedin: $scope.linkedin

        		};


        		console.log(dataObj);


				$http.post('http://localhost:8000/admin/server/newuser.php', dataObj).then(function(response) {

                    if(response.data == "success"){
					
                    //Show success alert
					
                }

                    
				}, function errorCallback(response){
                    //Show Error Alert
					$scope.alerts.push({type: 'danger', msg: 'A Error has occured.'});
				});


                $scope.fname = null;
                $scope.lname = null;
                $scope.email = null;
                $scope.password = null;
                $scope.phone = null;
                $scope.hours = null;
                $scope.bio = null;
                $scope.instagram = null;
                $scope.twitter = null;
                $scope.google = null;
                $scope.linkedin = null;


			}
			

         }]);
})();